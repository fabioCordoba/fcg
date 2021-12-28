<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategoria;

class Carrito extends Component
{
    public $orden, $subtotal, $envio, $total, $description, $referenceCode, $signature, $merchantId, $accountId, $responseUrl;

    public function render()
    {
        $this->merchantId = 508029;
        $this->accountId = 512321;
        $this->subtotal = 0;
        $this->envio = 10000;
        $this->description = '';
        $this->referenceCode = $this->orden->codigo;

        foreach ($this->orden->Products as $product) {
            if($this->description == ''){
                $this->description = $product->Product->nombre.' X '.$product->cant;
            }else{

                $this->description = $this->description.', '.$product->Product->nombre.' X '.$product->cant;
            }
            $this->subtotal = $this->subtotal + ($product->Product->precio * $product->cant);
        }

        $this->total = $this->envio + $this->subtotal;
        $this->signature = hash('md5', '4Vj8eK4rloUd272L48hsrarnUA~'.$this->merchantId.'~'.$this->referenceCode.'~'.$this->total.'~COP');

        //dd($this->orden->Products->first());
        
        return view('livewire.carrito');
    }
}