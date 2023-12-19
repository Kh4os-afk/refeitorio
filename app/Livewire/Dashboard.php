<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Dashboard extends Component
{
    public $feedbacks;

    public function mount()
    {
        $this->feedbacks = \App\Models\Feedback::all();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
