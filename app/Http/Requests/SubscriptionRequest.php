<?php

namespace App\Http\Requests;

use App\Http\Resources\PackageResource;
use App\Http\Resources\UserResource;
use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'package_id' => 'required|integer',
            'trial_end_date' => 'required|date',
            'subscription_end_date' => 'required|date',
        ];
    }
}
