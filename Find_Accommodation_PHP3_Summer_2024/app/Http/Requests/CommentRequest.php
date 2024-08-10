<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'content' => 'required|string|max:1000',
            'room_id' => 'required|exists:rooms,id',
            'parent_id' => 'nullable|exists:comments,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages()
    {
        return [
            'content.required' => 'Nội dung bình luận là bắt buộc.',
            'content.string' => 'Nội dung bình luận phải là chuỗi ký tự.',
            'content.max' => 'Nội dung bình luận không được vượt quá 1000 ký tự.',
            'room_id.required' => 'Phòng là bắt buộc.',
            'room_id.exists' => 'Phòng không tồn tại.',
            'parent_id.exists' => 'Bình luận cha không tồn tại.',
        ];
    }
}
