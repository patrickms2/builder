<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Role;
use App\Models\Usuario;
use Livewire\Component;

class Edit extends Component
{
    public Usuario $usuario;

    public string $password = '';

    public array $listsForFields = [];

    public function mount(Usuario $usuario)
    {
        $this->usuario = $usuario;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.usuario.edit');
    }

    public function submit()
    {
        $this->validate();
        $this->usuario->password = $this->password;
        $this->usuario->save();

        return redirect()->route('admin.usuarios.index');
    }

    protected function rules(): array
    {
        return [
            'usuario.nombre' => [
                'string',
                'nullable',
            ],
            'usuario.tel_fijo' => [
                'string',
                'nullable',
            ],
            'usuario.usuario' => [
                'string',
                'nullable',
            ],
            'password' => [
                'string',
            ],
            'usuario.cif' => [
                'string',
                'nullable',
            ],
            'usuario.tipo_id' => [
                'integer',
                'exists:roles,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['tipo'] = Role::pluck('title', 'id')->toArray();
    }
}
