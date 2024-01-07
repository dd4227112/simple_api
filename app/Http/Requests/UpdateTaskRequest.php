<?php

namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

//since we are usng the same validation rules like StoreTaskRequest, we can extend this class, and remove everything from this class

class UpdateTaskRequest extends StoreTaskRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    // /**
    //  * Get the validation rules that apply to the request.
    //  *
    //  * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    //  */
    // public function rules(): array
    // {
    //     return [
    //         //
    //     ];
    // }
    
}
