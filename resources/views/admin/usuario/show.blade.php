@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.usuario.title_singular') }}:
                    {{ trans('cruds.usuario.fields.id') }}
                    {{ $usuario->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.id') }}
                            </th>
                            <td>
                                {{ $usuario->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.nombre') }}
                            </th>
                            <td>
                                {{ $usuario->nombre }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.tel_fijo') }}
                            </th>
                            <td>
                                {{ $usuario->tel_fijo }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.usuario') }}
                            </th>
                            <td>
                                {{ $usuario->usuario }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.password') }}
                            </th>
                            <td>
                                **********
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.cif') }}
                            </th>
                            <td>
                                {{ $usuario->cif }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.usuario.fields.tipo') }}
                            </th>
                            <td>
                                @if($usuario->tipo)
                                    <span class="badge badge-relationship">{{ $usuario->tipo->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('usuario_edit')
                    <a href="{{ route('admin.usuarios.edit', $usuario) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection