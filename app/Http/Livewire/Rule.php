<?php

namespace App\Http\Livewire;

use App\Models\Rule as ModelsRule;
use Livewire\Component;

class Rule extends Component
{
    public $rules;
    public $idR, $ruleNya;
    public $cari;

    public function render()
    {
        if ($this->cari) {
            $this->rules = ModelsRule::where('id', 'LIKE', "%$this->cari%")
                ->orWhere('rule', 'LIKE', "%$this->cari%")
                // ->orWhere('kategoris_id', 'LIKE', "%$this->cari%")
                // ->orWhereHas('kategori', function (Builder $query) {
                //     $query->where('nama', 'like', "%$this->cari%");
                // })
                ->get();
        } else {
            $this->rules = ModelsRule::all();
        }
        return view('livewire.rule');
    }

    public function resetInputs()
    {
        $this->idR = null;
        $this->ruleNya = null;
    }

    public function store()
    {
        $this->validate([
            // 'id' => 'required',
            'ruleNya' => 'required',
        ]);

        ModelsRule::updateOrCreate(['id' => $this->idR], [
            'id' => $this->idR,
            'rule' => $this->ruleNya,
        ]);

        session()->flash('info', $this->idR ? 'Rule Berhasil Diedit' : 'Rule Berhasil Ditambah');

        $this->resetInputs();

        $this->emit('userStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $rule = ModelsRule::findOrFail($id);
        $this->idR = $rule->id;
        $this->ruleNya = $rule->rule;
    }

    public function delete($id)
    {
        ModelsRule::find($id)->delete();
    }
}
