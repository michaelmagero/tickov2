<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Package;
use App\Models\Payment;
use App\Models\User;

class PaymentService
{

    public function initiateWebPayment($request, int $id): array
    {
        $ttl = Package::where('id', $request->package_id)->value('price') - Package::where('id', $request->package_id)->value('price') * (Package::where('id', $request->package_id)->value('discount') / 100);
        $security_key = env('app_env') == 'local' ? env('ipay_key_old'): env('ipay_key');
        $post_data = [
            "live" => "1",
            "oid" => "CK" . User::where('id', $id)->value('id'),
            "inv" => "CK" . str_replace('-,', '', now()->format('Ymdhis')) . User::where('id', $id)->value('id'),
            "ttl" => $ttl,
            "tel" => (new HelperService())->formatPhoneNumber(User::where('id', $id)->value('phone')),
            "eml" => User::where('id', $id)->value('email'),
            "vid" =>"insert vendor id here",
            "curr" => "KES",
            "p1" => "1",
            "p2" => "1",
            "p3" => "1",
            "p4" => "1",
            "cbk" => env('APP_ENV') == 'staging' ? "https://vendor.com/dealer/payment-response" : "https://vendor.co.ke/dealer/payment-response",
            "cst" => "1",
            "crl" => "0",
        ];

        $datastring =  $post_data['live'].$post_data['oid'].$post_data['inv'].$post_data['ttl'].$post_data['tel'].$post_data['eml'].$post_data['vid'].$post_data['curr'].$post_data['p1'].$post_data['p2'].$post_data['p3'].$post_data['p4'].$post_data['cbk'].$post_data['cst'].$post_data['crl'];

        return [
            "package_id" => $request->package_id,
            "subscription_ends_at" => $request->subscription_ends_at,
            "live" => $post_data['live'],
            "oid" => $post_data['oid'],
            "inv" => $post_data['inv'],
            "ttl" => $post_data['ttl'],
            "tel" => $post_data['tel'],
            "eml" => $post_data['eml'],
            "vid" => $post_data['vid'],
            "curr" => $post_data['curr'],
            "p1" => $post_data['p1'],
            "p2" => $post_data['p2'],
            "p3" => $post_data['p3'],
            "p4" => $post_data['p4'],
            "cbk" => $post_data['cbk'],
            "cst" => $post_data['cst'],
            "crl" => $post_data['crl'],
            "hsh" => hash_hmac('sha1', $datastring, $security_key)
        ];
    }

    public function store($request): void
    {
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->status = $request->status;
        $payment->txncd = $request->txncd;
        $payment->msisdn_id = $request->msisdn_id;
        $payment->msisdn_idnum = $request->msisdn_idnum;
        $payment->p1 = $request->p1;
        $payment->p2 = $request->p2;
        $payment->p3 = $request->p3;
        $payment->p4 = $request->p4;
        $payment->uyt = $request->uyt;
        $payment->agt = $request->agt;
        $payment->qwh = $request->qwh;
        $payment->ifd = $request->ifd;
        $payment->afd = $request->afd;
        $payment->poi = $request->poi;
        $payment->ivm = $request->ivm;
        $payment->mc = $request->mc;
        $payment->channel = $request->channel;
        $payment->save();
    }
}
