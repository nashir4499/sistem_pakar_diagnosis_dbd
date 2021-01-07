<?php

namespace App\Http\Livewire;

use App\Models\Gejala as ModelsGejala;
use Livewire\Component;

class Gejala extends Component
{
    public $gejalas;
    public $kodeG, $namaG, $ketG;
    public $cari;

    public function render()
    {
        if ($this->cari) {
            $this->gejalas = ModelsGejala::where('kode', 'LIKE', "%$this->cari%")
                ->orWhere('nama_gejala', 'LIKE', "%$this->cari%")
                ->orWhere('keterangan', 'LIKE', "%$this->cari%")
                // ->orWhere('kategoris_id', 'LIKE', "%$this->cari%")
                // ->orWhereHas('kategori', function (Builder $query) {
                //     $query->where('nama', 'like', "%$this->cari%");
                // })
                ->get();
        } else {
            $this->gejalas = ModelsGejala::all();
        }
        return view('livewire.gejala');
    }

    public function resetInputs()
    {
        $this->kodeG = null;
        $this->namaG = null;
        $this->ketG = null;
    }

    public function store()
    {
        $this->validate([
            'kodeG' => 'required',
            'namaG' => 'required',
            // 'ketG' => 'required',
        ]);

        ModelsGejala::updateOrCreate(['kode' => $this->kodeG], [
            'kode' => $this->kodeG,
            'nama_gejala' => $this->namaG,
            'keterangan' => $this->ketG,
        ]);

        session()->flash('info', $this->kodeG ? 'Gejala Berhasil Diedit' : 'Gejala Berhasil Ditambah');

        $this->resetInputs();

        $this->emit('userStore'); // Close model to using to jquery
    }

    public function edit($kode)
    {
        $gejala = ModelsGejala::findOrFail($kode);
        $this->kodeG = $gejala->kode;
        $this->namaG = $gejala->nama_gejala;
        $this->ketG = $gejala->keterangan;
    }

    public function delete($kode)
    {
        ModelsGejala::find($kode)->delete();
    }
}
