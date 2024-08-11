<?php
namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{ 
    public function authorize(): bool
    {
        return false;
    }
    
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
         // 'password' => 'required|string|required_with:password_confirmation|same:password_confirmation',
         ];
    }
}
