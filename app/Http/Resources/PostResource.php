<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
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
            'id' => $this->id,
            'user_id' => UserResource::collection(User::where('id', $this->user_id)->get()),
            'category_id' => CategoryResource::collection(Category::where('id', $this->category_id)->get()),
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
