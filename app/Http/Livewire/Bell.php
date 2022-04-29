<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\notification;

class Bell extends Component
{
    public $user, $notificacion;
    protected $listeners = ['refreshComponent' => 'render'];

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        //dd($this->user->notifications->where('estado','nonread')->count());
        return view('livewire.bell');
    }
}
