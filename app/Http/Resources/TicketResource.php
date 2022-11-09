<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            'post_id' => PostResource::collection($this->post_id),
            'batch_no' => $this->batch_no,
            'quantity' => $this->quantity,
            'status' => $this->status,
            'discount' => $this->discount,
            'ticket_categories' => $this->ticket_categories,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
