<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class Stock extends Component
{
    use WithPagination;

    public $textBusqueda, $carrito, $productemp, $productss, $type, $contVerP;

    public function __construct()
    {
        
        //$this->products = Products::paginate(4)->where('estado','Activo')->orderBy('id', 'DESC');
        
    }

    public function mount(){
        $this->textBusqueda = 'Todos Los Productos';
        $this->type = 'all';
        $this->contVerP = 1;
    }

    public function addCar($id, $sw){

        $prodTemp = Products::find($id);

        if($this->contVerP > 1){
            $temp = [
                'id' => $prodTemp->id,
                'nombre' => $prodTemp->nombre,
                'precio' => $prodTemp->precio,
                'foto' => $prodTemp->foto,
                'cant' => $this->contVerP
            ];
        }else{
            $temp = [
                'id' => $prodTemp->id,
                'nombre' => $prodTemp->nombre,
                'precio' => $prodTemp->precio,
                'foto' => $prodTemp->foto,
                'cant' => 1
            ];
        }


        $cont = 0;

        if ($this->carrito instanceof Collection) {
            foreach ($this->carrito as $key => $value) {
                if($value['id'] == $temp['id']){
                    $temp['cant'] = $value['cant'] + $temp['cant'];
                    $this->carrito = $this->carrito->replace([$key => $temp]);
                    $cont = 1;
                }
            }

            if($cont == 0){
                $this->carrito->push($temp);
            }

        }else{
            $this->carrito = collect([$temp]);
        }

        $this->dispatchBrowserEvent('success-car');

        if($sw == 'verprod'){
            $this->closeModal($sw);
        }

        return $this->carrito;
    }

    public function verprod($id, $modal){
        $this->productemp = Products::find($id);
        $this->dispatchBrowserEvent('openModal', ['modal' => $modal]);
    }

    public function closeModal($modal){
        $this->dispatchBrowserEvent('closeModal', ['modal' => $modal]);
        $this->productemp = null;
        $this->contVerP = 1;
    }

    public function search(){
        $this->products = Products::where('estado','Activo')
            ->where('nombre', 'LIKE', '%' . $this->textBusqueda . '%')
            ->orderBy('id', 'DESC')->get();
        $this->type = 'search';
    }

    public function plusVerP($id,$var){
        
        if($var == 'mas'){
            $this->contVerP = $this->contVerP + 1;
        }else if($var == 'menos'){
            if($this->contVerP != 1){
                $this->contVerP = $this->contVerP - 1;
            }else{
                $this->contVerP = 1;
            }
        }
        //dd($id,$var);
    }

    public function plusCar($id,$var){

        if ($this->carrito instanceof Collection) {
            foreach ($this->carrito as $key => $value) {
                if($value['id'] == $id && $value['cant'] != 0){
                    $temp = $value;
                    if($var == 'mas'){
                        $temp['cant'] = $value['cant'] + 1;
                    }else if($var == 'menos'){
                        $temp['cant'] = $value['cant'] - 1;
                    }
                    if($temp['cant'] == 0){
                        $this->carrito->splice($key, 1);
                    }else{
                        $this->carrito = $this->carrito->replace([$key => $temp]);
                    }
                }
            }
        }

    }

    public function orderNow($id)
    {
        $orden = Products::find($id);
        return redirect()->route('pay', ['orden' => $orden, 'cant' => $this->contVerP]);
    }

    public function render()
    {
        
        if($this->type == 'all'){
            
            return view('livewire.stock',[
                'products' => Products::where('estado','Activo')->orderBy('id', 'DESC')->paginate(20),
                'categorias' => Categoria::all(),
                'subcategoria' => Subcategoria::all()
            ]);
            
        }else if($this->type == 'search'){
            return view('livewire.stock',[
                'products' => $this->productss,
                'categorias' => Categoria::all(),
                'subcategoria' => Subcategoria::all()
            ]);
        }

    }
}
