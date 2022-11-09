<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'user_id' => UserResource::collection($this->user_id),
            'package_id' => PackageResource::collection($this->package_id),
            'status' => $this->status,
            'trial_end_date' => $this->trial_end_date,
            'subscription_end_date' => $this->subscription_end_date,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
