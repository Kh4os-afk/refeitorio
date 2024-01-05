<?php

namespace App\Livewire;

use App\Models\Branch;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Branches extends Component
{


    #[Rule(['required','numeric', 'min:1','max:20','unique:branches,id'])]
    public $branchcod;
    #[Locked]
    #[Rule(['required','numeric', 'min:1','max:20'])]
        public $newbranchcod;
    #[Rule(['required','string','min:3','max:80'])]

    public $branch,$newbranch;

    public $branches;
    public $edit = false;

    public function submit()
    {
        $this->validate([
            'branchcod' => 'required|numeric|min:1|max:20|unique:branches,id',
            'branch' => 'required|string|min:3|max:80'
        ]);

        Branch::create([
            'id' => $this->branchcod,
            'branch' => $this->branch,
        ]);

        $this->reset();
    }

    public function editar($id)
    {
        $branch = Branch::find($id);
        $this->newbranchcod = $branch->id;
        $this->newbranch = $branch->branch;
    }

    public function submitEdit()
    {
        $this->validate([
            'newbranch' => 'required|string|min:3|max:80',
        ]);

        Branch::find($this->newbranchcod)
        ->update([
            'branch' => $this->newbranch
        ]);

        $this->redirect('/branches');
    }

    public function resetar()
    {
        $this->reset();
    }

    public function render()
    {
        $this->branches = Branch::all();
        return view('livewire.branches');
    }
}
