<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    public $user, $roles, $name, $email, $identificacion, $telefono, $rol, $rolS, $id_user;
    protected $listeners = ['say-delete' => 'delete'];

    public function abrirModal($id, $modal){
        
        $this->user = User::find($id);
        
        if($modal == 'Edit'){
            $this->roles = Role::get()->pluck('name');
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->identificacion = $this->user->identificacion;
            $this->telefono = $this->user->telefono;
            $this->id_user = $id;
            $this->roles->prepend($this->user->roles->implode('name', ','));
        }
        $this->dispatchBrowserEvent('openModal', ['modal' => $modal]);
    }

    public function closeModal($modal){
        $this->dispatchBrowserEvent('closeModal', ['modal' => $modal]);
        $this->resetInputs();
    }

    public function resetInputs(){
        $this->name = null;
        $this->email = null;
        $this->identificacion = null;
        $this->telefono = null;
        $this->rol = null;
        $this->roles = null;
        $this->id_user = null;
    }

    public function Store(){
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if($this->rol != NULL){

            User::find($this->id_user)->update([
                'name' => $this->name ,
                'email' => $this->email,
                'identificacion' => $this->identificacion,
                'telefono' => $this->telefono
            ]);

             User::find($this->id_user)->syncRoles($this->rol);
            
        }else{

            User::find($this->id_user)->update([
                'name' => $this->name ,
                'email' => $this->email,
            ]);
        }

        $this->closeModal('Edit');
        $this->dispatchBrowserEvent('UserUpdate');

    }

    public function delUser($id){
        $this->dispatchBrowserEvent('eliminar', ['id' => $id]);
    }

    public function delete($id){
        User::find($id)->delete();
        $this->dispatchBrowserEvent('Delete');
    }
    
    public function render()
    {
        return view('livewire.users',[
            'users' => User::paginate(10),
        ]);
    }
}
