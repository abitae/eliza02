<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Contracts\Support\Renderable;

class UserIndex extends Component
{
    public function render(): Renderable
    {
        $users = User::all();
        return view('livewire.user.user-index',compact('users'));
    }
    #[On('refresh-list')]
    public function refresh(){
        
    }
}
