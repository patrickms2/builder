<?php

namespace App\Http\Requests;

use App\Models\Usuario;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('usuario_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => [
                'string',
                'nullable',
            ],
            'tel_fijo' => [
                'string',
                'nullable',
            ],
            'usuario' => [
                'string',
                'nullable',
            ],
            'password' => [
                'string',
                'nullable',
            ],
            'cif' => [
                'string',
                'nullable',
            ],
            'tipo_id' => [
                'integer',
                'exists:roles,id',
                'nullable',
            ],
        ];
    }
}
