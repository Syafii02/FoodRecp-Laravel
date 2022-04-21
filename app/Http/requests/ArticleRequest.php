<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'category_id' => 'required',
            'type_id' => 'required',
            'deskripsi' => 'required',
            'duration' => 'required|max:255',
            'link_video' => 'required|max:255',
            'alat' => 'required|max:500',
            'bahan' => 'required|max:500',
            'langkah_langkah' => 'required|max:2000',
            'images' => 'required|mimes:png,jpg,jpeg,svg',
        ];
    }
}
