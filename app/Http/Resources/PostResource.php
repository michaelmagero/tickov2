<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'category_id' => CategoryResource::collection($this->category_id),
            'post_id' => $this->post_id,
            'title' => $this->title,
            'poster' => $this->poster,
            'description' => $this->description,
            'location' => $this->location,
            'date' => $this->date,
            'status' => $this->status,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
