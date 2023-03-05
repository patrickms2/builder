<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('usuario_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usuario.index');
    }

    public function create()
    {
        abort_if(Gate::denies('usuario_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usuario.create');
    }

    public function edit(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.usuario.edit', compact('usuario'));
    }

    public function show(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario->load('tipo');

        return view('admin.usuario.show', compact('usuario'));
    }
}
