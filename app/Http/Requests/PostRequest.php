<?php

namespace App\Http\Requests;

use App\Http\Resources\CategoryResource;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'post_id' => 'required|uuid',
            'title' => 'required|string',
            'poster' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|boolean',
        ];
    }
}
