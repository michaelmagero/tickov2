<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id' => $this->resource,
            'category' => $this->category,
            'description' => $this->description,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
