<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Form;
use Spatie\Permission\Models\Role;

class RoleForm extends Form
{
    public ?Role $role = null;

    public $name = '';
    public $per = [];

    public function setRole(?Role $role = null): void
    {
        $this->role = $role;
        $this->name = $role->name;
        $this->per = $role->permissions->pluck('name');
    }
    public function save()
    {
        $this->validate();
        if (empty($this->role)) {
            Role::create($this->only(['name']))->syncPermissions($this->per);
        } else {
            $this->role->update($this->only(['name']));
            $this->role->syncPermissions($this->per);
        }
        $this->reset();
    }

    public function validationAttributes(): array
    {
        return [
            'name' => 'name',
            'per' => 'per',
        ];
    }
    public function rules(): array
    {
        return [
            'name'  => [
                'required',
                Rule::unique('roles', 'name')->ignore($this->component->role),
            ],
            'per'  => [ 

            ],

        ];
    }
}
