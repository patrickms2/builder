<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('usuario.nombre') ? 'invalid' : '' }}">
        <label class="form-label" for="nombre">{{ trans('cruds.usuario.fields.nombre') }}</label>
        <input class="form-control" type="text" name="nombre" id="nombre" wire:model.defer="usuario.nombre">
        <div class="validation-message">
            {{ $errors->first('usuario.nombre') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.nombre_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('usuario.tel_fijo') ? 'invalid' : '' }}">
        <label class="form-label" for="tel_fijo">{{ trans('cruds.usuario.fields.tel_fijo') }}</label>
        <input class="form-control" type="text" name="tel_fijo" id="tel_fijo" wire:model.defer="usuario.tel_fijo">
        <div class="validation-message">
            {{ $errors->first('usuario.tel_fijo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.tel_fijo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('usuario.usuario') ? 'invalid' : '' }}">
        <label class="form-label" for="usuario">{{ trans('cruds.usuario.fields.usuario') }}</label>
        <input class="form-control" type="text" name="usuario" id="usuario" wire:model.defer="usuario.usuario">
        <div class="validation-message">
            {{ $errors->first('usuario.usuario') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.usuario_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('usuario.password') ? 'invalid' : '' }}">
        <label class="form-label" for="password">{{ trans('cruds.usuario.fields.password') }}</label>
        <input class="form-control" type="password" name="password" id="password" wire:model.defer="password">
        <div class="validation-message">
            {{ $errors->first('usuario.password') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.password_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('usuario.cif') ? 'invalid' : '' }}">
        <label class="form-label" for="cif">{{ trans('cruds.usuario.fields.cif') }}</label>
        <input class="form-control" type="text" name="cif" id="cif" wire:model.defer="usuario.cif">
        <div class="validation-message">
            {{ $errors->first('usuario.cif') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.cif_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('usuario.tipo_id') ? 'invalid' : '' }}">
        <label class="form-label" for="tipo">{{ trans('cruds.usuario.fields.tipo') }}</label>
        <x-select-list class="form-control" id="tipo" name="tipo" :options="$this->listsForFields['tipo']" wire:model="usuario.tipo_id" />
        <div class="validation-message">
            {{ $errors->first('usuario.tipo_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.usuario.fields.tipo_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>