<?php
declare(strict_types=1);

namespace App\Services;


use App\Http\Resources\SubscriptionResource;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\JsonResponse;

class SubscriptionService
{

    public function checkout($request, int $id): JsonResponse
    {
        return response()->json(["ipay_checkout" => (new PaymentService())->initiateWebPayment($request, $id)]);
    }

    public function getSubscription(): JsonResponse
    {
        return response()->json([
            'data' => SubscriptionResource::collection(Subscription::paginate(10))
        ]);
    }

    public function storeSubscription($request): JsonResponse
    {
        $subscription = new Subscription();
        $subscription->user_id = $request->user_id;
        $subscription->package_id = $request->package_id;
        $subscription->status = $request->status;
        $subscription->trial_end_date = $request->trial_end_date;
        $subscription->subscription_end_date = $request->subscription_end_date;
        $subscription->save();

        return response()->json([
            'message' => 'Subscription Added Successfully',
            'data' => SubscriptionResource::collection($subscription)
        ], 201);
    }

    public function showSubscription($subscription): JsonResponse
    {
        return response()->json([
            'data' => SubscriptionResource::collection(Subscription::find($subscription))
        ]);
    }

    public function updateSubscription($request, $subscription): JsonResponse
    {
        $subscription = Subscription::find($subscription);
        $subscription->user_id = $request->user_id;
        $subscription->package_id = $request->package_id;
        $subscription->status = $request->status;
        $subscription->trial_end_date = $request->trial_end_date;
        $subscription->subscription_end_date = $request->subscription_end_date;
        $subscription->save();

        return response()->json([
            'message' => 'update successful',
            'data' => SubscriptionResource::collection($subscription)
        ]);
    }

    public function deleteSubscription($subscription): JsonResponse
    {
        $subscription->delete();

        return response()->json([
            'message' => 'Subscription Deleted Successfully'
        ], 204);
    }
}
