<?php

namespace App\Http\Livewire;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Relasi as ModelsRelasi;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Livewire\Component;

class Relasi extends Component
{
    public $relasis, $diagnosas, $gejalas;
    public $relasiSementara;
    public $gejalaFix = [];
    public $idR, $kodeP, $kodeG, $cf;
    public $cari;

    public function render()
    {
        if ($this->cari) {
            $this->relasis = ModelsRelasi::where('cf', 'LIKE', "%$this->cari%")
                ->orWhere('diagnosas_id', 'LIKE', "%$this->cari%")
                ->orWhereHas('diagnosa', function (Builder $query) {
                    $query->where('nama_diagnosa', 'like', "%$this->cari%");
                })
                ->orWhere('gejalas_id', 'LIKE', "%$this->cari%")
                ->orWhereHas('gejala', function (Builder $query) {
                    $query->where('nama_gejala', 'like', "%$this->cari%");
                })
                ->get();
        } else {
            $this->relasis = ModelsRelasi::all();
        }
        if ($this->kodeP) {
            $this->gejalaFix = [];
            $this->gejalas = Gejala::all();
            foreach ($this->gejalas as $gejala) {
                // $this->relasiSementara = ModelsRelasi::where('diagnosas_id', $this->kodeP)
                //     ->orWhere('gejalas_id', '!=', $gejala->kode)
                //     ->get();
                $this->relasiSementara = ModelsRelasi::where('diagnosas_id', $this->kodeP)
                    // ->where('gejalas_id', '$gejala->kode')
                    ->where('gejalas_id', $gejala->kode)
                    ->get();
                // dd($this->relasiSementara->first() === null);
                if ($this->relasiSementara->first() === null) {
                    // dd('oke');
                    $this->gejalaFix = Arr::prepend($this->gejalaFix, $gejala->nama_gejala, $gejala->kode);
                    $this->gejalaFix = Arr::sortRecursive($this->gejalaFix);
                }
            }

            // dd($this->gejalaFix);
        }
        $this->diagnosas = Diagnosa::all();
        // $this->gejalas = Gejala::all();

        return view('livewire.relasi');
    }

    public function cekGejala()
    {
        # code...
    }

    public function resetInputs()
    {
        $this->idR = null;
        $this->kodeP = null;
        $this->kodeG = null;
        $this->cf = null;
    }

    public function store()
    {
        $this->validate([
            // 'idR' => 'required',
            'kodeP' => 'required',
            'kodeG' => 'required',
            'cf' => 'required',
        ]);

        ModelsRelasi::updateOrCreate(['id' => $this->idR], [
            'id' => $this->idR,
            'diagnosas_id' => $this->kodeP,
            'gejalas_id' => $this->kodeG,
            'cf' => $this->cf,
        ]);

        session()->flash('info', $this->idR ? 'Relasi Berhasil Diedit' : 'Relasi Berhasil Ditambah');

        $this->resetInputs();

        $this->emit('userStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $relasi = ModelsRelasi::findOrFail($id);
        $this->idR = $relasi->id;
        $this->kodeP = $relasi->diagnosas_id;
        $this->kodeG = $relasi->gejalas_id;
        $this->cf = $relasi->cf;
    }

    public function delete($id)
    {
        ModelsRelasi::find($id)->delete();
    }
}
