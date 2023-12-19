<?php

namespace App\Livewire;

use Livewire\Component;

class QRCode extends Component
{
    public $url = null;
    public function gerarQRCode($filial)
    {
        $this->url = 'https://refeitorio.barataodacarne.com.br/' . $filial; // Substitua isso pelo seu link
        /*return response(\SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->margin(1)->generate($url));*/
    }

    public function render()
    {
        return view('livewire.q-r-code');
    }
}
