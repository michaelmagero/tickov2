<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'lastname' => $this->lastname,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'company' => $this->company,
            'phone' => $this->phone,
            'role' => $this->role,
            'created_at' => Carbon::create($this->created_at)->format('Y-m-d')
        ];
    }
}
