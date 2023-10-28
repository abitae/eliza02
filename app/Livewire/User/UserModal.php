<?php

namespace App\Livewire\User;

use Spatie\Permission\Models\Role;
use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use App\Livewire\Forms\UserForm;
class UserModal extends ModalComponent
{
    public ?User $user = null;
    public UserForm $form;
    public function mount(User $user = null) : void
    {
        if($user->exists) {
        $this->form->setUser($user);
        }
    }
    public function save(): void
    {
        $this->form->save();
        $this->closeModal();
        //$this->dispatch('refresh-list');
    }
    public function render()
    {
        $roles = Role::all()->pluck('name');
        return view('livewire.user.user-modal',compact('roles'));
    }
    public static function closeModalOnEscape(): bool
    {
        return true;
    }
    public static function closeModalOnClickAway(): bool
    {
        return true;
    }
    public static function closeModalOnEscapeIsForceful(): bool
    {
        return false;
    }
    public static function dispatchCloseEvent(): bool
    {
        return false;
    }
}
