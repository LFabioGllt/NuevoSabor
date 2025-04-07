<?php

namespace App\Http\Requests\Recipes;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    return [
      'name_rec' => 'required|max:50',
      'user_id' => 'required|integer',
      'menu_id' => 'required|integer',
      'ingredients' => 'required|string|max:500',
      'instructions' => 'required|string|max:1500',
      'recomendation' => 'nullable|string|max:500',
      'image' => 'required|image'
    ];
  }
}
