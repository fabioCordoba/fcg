<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Livewire\WithFileUploads;

class Productos extends Component
{
    use WithFileUploads;

    public $user, $catego, $subCat, $nombre, $precio, $Descripcion, $foto, $swstore;
    
    public function abrirModal($id, $modal){

        
        $this->user = User::find($id);
        
        if($modal == 'Edit'){

            $this->swstore = 'Edit';
            
            dd($id, $modal);

            /*$this->roles = Role::get()->pluck('name');
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->identificacion = $this->user->identificacion;
            $this->telefono = $this->user->telefono;
            $this->id_user = $id;
            $this->roles->prepend($this->user->roles->implode('name', ','));*/

        }else if($modal == 'Create'){
            $this->swstore = 'Create';
            $this->dispatchBrowserEvent('openModal', ['modal' => $modal]);
            
        }

    }

    public function Store(){
        $validatedData = $this->validate([
            'nombre' => 'required|unique:products',
            'precio' => 'required',
            'Descripcion' => 'required',
            'foto' => 'required'
        ]);


        if($this->swstore == 'Create'){

            $path = $this->foto->store('images/fotos', 'public_up');

            Products::create([
                'subcategoria_id' => $this->subCat,
                'nombre' => $this->nombre,
                'Descripcion' => $this->Descripcion,
                'precio' => $this->precio,
                'foto' => $path,
                'estado' => 'Activo'
            ]);

            $this->closeModal('Create');
            $this->dispatchBrowserEvent('success');

        }


        /*if($this->rol != NULL){

            User::find($this->id_user)->update([
                'name' => $this->name ,
                'email' => $this->email,
            ]);

             User::find($this->id_user)->syncRoles($this->rol);
            
        }else{

            User::find($this->id_user)->update([
                'name' => $this->name ,
                'email' => $this->email,
            ]);
        }*/

    }

    public function closeModal($modal){
        $this->dispatchBrowserEvent('closeModal', ['modal' => $modal]);
        $this->resetInputs();
    }

    public function resetInputs(){
        $this->nombre = null;
        $this->precio = null;
        $this->Descripcion = null;
        $this->foto = null;
        $this->subCat = null;
        $this->catego = null;
        $this->swstore = null;
    }

    public function render()
    {
        return view('livewire.productos',[
            'products' => Products::paginate(10),
            'categorias' => Categoria::all(),
            'subcategoria' => Subcategoria::all()
        ]);
    }
}
