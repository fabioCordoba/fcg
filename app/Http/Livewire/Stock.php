<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Support\Collection;

class Stock extends Component
{

    public $textBusqueda, $carrito, $productemp;

    public function mount(){
        $this->textBusqueda = 'Dulces';
    }

    public function addCar($id){

        $prodTemp = Products::find($id);

        $temp = [
            'id' => $prodTemp->id,
            'nombre' => $prodTemp->nombre,
            'precio' => $prodTemp->precio,
            'foto' => $prodTemp->foto,
            'cant' => 1
        ];

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
        return $this->carrito;
    }

    public function verCar(){
        //dd($this->carrito);
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

    public function render()
    {
        return view('livewire.stock',[
            'products' => Products::where('estado','Activo')->orderBy('id', 'DESC')->paginate(20),
            'categorias' => Categoria::all(),
            'subcategoria' => Subcategoria::all()
        ]);
    }
}
