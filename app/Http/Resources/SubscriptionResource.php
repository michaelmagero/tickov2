<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => UserResource::collection($this->id),
            'user_id' => UserResource::collection(User::where('id', $this->user_id)->get()),
            'package_id' => PackageResource::collection(Package::where('id', $this->package_id)->get()),
            'status' => $this->status,
            'trial_end_date' => $this->trial_end_date,
            'subscription_end_date' => $this->subscription_end_date,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
