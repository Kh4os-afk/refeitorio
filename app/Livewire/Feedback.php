<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Feedback extends Component
{
    public $rating = 1;
    public $codfilial;
    #[Rule(['string', 'max:255'])]
    public $comment = ''; // Adicionando um campo para o comentário

    public function mount($filial = 0)
    {
        $this->codfilial = $filial;
    }

    public function setRating($value)
    {
        $this->rating = $value;
    }

    public function updated()
    {
        $this->validate();
    }

    public function submit()
    {
        $this->validate();
        \App\Models\Feedback::create([
            'rating' => $this->rating,
            'comment' => $this->comment,
            'codfilial' => $this->codfilial,
        ]);

        $this->reset();

        return $this->js("alert('Avaliação Salva com sucesso!')");
    }

    public function render()
    {
        return view('livewire.feedback')
            ->layout('components.layouts.guest');
    }
}
