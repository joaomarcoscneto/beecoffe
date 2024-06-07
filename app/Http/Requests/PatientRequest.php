<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PatientRequest extends FormRequest
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
        $patientId = $this->route('patient') ? $this->route('patient')->id : null;
        return [
            'name' => 'required|max:255',
            'cpf' => [
                'required',
                'min:14',
                'max:14',
                Rule::unique('patients')->ignore($patientId),
            ],
            'email' => ['required', 'email', 'max:255', Rule::unique('patients')->ignore($patientId)],
            'birthdate' => 'required|date',
        ];
    }
}
