<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Http\Resources\Admin\UsuarioResource;
use App\Models\Usuario;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('usuario_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UsuarioResource(Usuario::with(['tipo'])->get());
    }

    public function store(StoreUsuarioRequest $request)
    {
        $usuario = Usuario::create($request->validated());

        return (new UsuarioResource($usuario))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UsuarioResource($usuario->load(['tipo']));
    }

    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->validated());

        return (new UsuarioResource($usuario))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
