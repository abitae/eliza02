<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\On;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user = null;

    public $name = '';
    public $email = '';
    public $password = '';
    public $role = '';

    public function setUser(?User $user = null): void
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->getRoleNames()->first();
    }
    public function save()
    {
        $this->validate();
        if (empty($this->user)) {
            User::create($this->only(['name', 'email', 'password']))->syncRoles($this->role);
        } else {
            $this->user->update($this->only(['name', 'email', 'password']));
            $this->user->syncRoles($this->role);
        }
        $this->reset();
    }
    public function validationAttributes(): array
    {
        return [
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'role' => 'role',
        ];
    }
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->component->user)],
            'password' => ['required'],
            'role' => ['required'],
        ];
    }
}
