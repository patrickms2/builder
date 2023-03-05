@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.usuario.title_singular') }}:
                    {{ trans('cruds.usuario.fields.id') }}
                    {{ $usuario->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('usuario.edit', [$usuario])
        </div>
    </div>
</div>
@endsection