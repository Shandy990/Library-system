<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $rules = [
            'title' => [
                'required',
                'max:150',
            ],
            'author' => 'required|max:200',
            'publish_date' => 'required|date',
            'genres' => 'required|array|min:1',
            'description' => 'required|max:150000',
        ];

        if (!$this->book){
            $rules['title'][]= 'unique:books,title';
        }

        return $rules;
    }
}
