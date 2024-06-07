<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DoctorRequest extends FormRequest
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
        $doctorId = $this->route('doctor') ? $this->route('doctor')->id : null;
        return [
            'name' => 'required|max:255',
            'crm' => ['required', 'max:255', Rule::unique('doctors')->ignore($doctorId)],
            'specialty' => 'required|max:255',
        ];
    }
}
