<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Providers\FormRequest;

class CompanyStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_name' => 'required|string|min:3|max:200',
            'document' => 'string|size:14|unique:company',
        ];
    }
}
Route::get(uri:'Client/client', action:'ClientControler@creat')->name(name:'client.creat');
Route::post(uri:'client', action:'ClientControler@store')->name(name:'client.store');