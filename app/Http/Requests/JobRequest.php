<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
                'title'=> 'required',
                'description'=> 'required',
                'salary'=>'required|integer',
                'location'=>'required',
                'organization_id'=> 'required'
        ];
    }

    public function messages(): array
    {
        return [
                'title.required'=> ' Job turtle is required',
                'description'=> 'job description is required',
                'salary'=>'invalid salary',
                'location'=>'job location is required',
        ];
    }
}
