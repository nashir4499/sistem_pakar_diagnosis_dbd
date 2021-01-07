<?php

namespace App\Http\Livewire;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Relasi;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class Pengecekan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $hitung = 0;
    // public $gejalas;
    public $diagnosas;
    public $cfUser = [];
    public $cfCombine = [];
    public $prmis = [];
    public $layoutHasil = 0;

    public function mount()
    {
        // $this->diagnosas = Diagnosa::get();
        // foreach ($diagnosas as $diagnosa) {
        //     // dd($diagnosa->kode);
        //     $kode = $diagnosa->kode;
        //     $datas = Relasi::where('diagnosas_id', $kode)->get();
        //     // array_push($this->cf, $diagnosa->kode);
        //     // $this->cf = [$diagnosa->kode => (object)[]];
        //     // $this->cf = (object)[$kode => []];
        //     $this->cf = Arr::prepend($this->cf, [], $kode);
        //     // dd($datas);
        //     foreach ($datas as $data) {
        //         // dd($data);
        //         // $this->cf->$kode = [$data->gejalas_id => []];
        //         // array_push($this->cf->$kode, (object)[$data->gejalas_id => 0]);

        //         // $this->cf->$kode = Arr::prepend($this->cf->$kode, 0, $data->gejalas_id);
        //         // $this->cf->$kode = Arr::sortRecursive($this->cf->$kode);

        //         $this->cf[$kode] = Arr::prepend($this->cf[$kode], 0, $data->gejalas_id);
        //         $this->cf[$kode] = Arr::sortRecursive($this->cf[$kode]);
        //     }
        //     // dd($this->cf[$kode]);
        // }
        $gejalas = Gejala::get('kode');
        foreach ($gejalas as $gejala) {
            $kode = $gejala->kode;
            $this->cfUser = Arr::prepend($this->cfUser, 0, $kode);
            $this->cfUser = Arr::sortRecursive($this->cfUser);
        }
        // dd($this->cfUser);
    }

    public function render()
    {
        // $this->gejalas = Gejala::paginate(3);
        // dd($this->gejalas);
        // return view('livewire.pengecekan');
        return view('livewire.pengecekan', [
            'gejalas' => Gejala::paginate(1)
        ])
            ->extends('layouts.umum')
            ->section('content');
    }

    public function premisTunggal()
    {
        // dd($this->cfUser);

        $this->diagnosas = Diagnosa::all();

        // $this->cfUser;
        foreach ($this->diagnosas as $diagnosa) {
            // dd($diagnosa->kode);
            $kode = $diagnosa->kode;
            $rekasis = Relasi::where('diagnosas_id', $kode)->get();
            $this->prmis = Arr::prepend($this->prmis, [], $kode);
            foreach ($rekasis as $rekasi) {
                array_push($this->prmis[$kode], $this->cfUser[$rekasi->gejalas_id] * $rekasi->cf);
            }
            // dd(count($this->prmis[$kode]));
            // $this->cfCombine = $this->prmis[$kode][0] + $this->prmis[$kode][1] * (1 - $this->prmis[$kode][0]);
            // $cek = [];
            // for ($i = 2; $i < count($this->prmis[$kode]); $i++) {
            //     // array_push($cek, $this->prmis[$kode][$i]);
            //     $this->cfCombine = $this->cfCombine + $this->prmis[$kode][$i] * (1 - $this->cfCombine);
            // }
            // dd($rekasis->count());
            if ($rekasis->count() <= 1) {
                $this->cfCombine[$kode] = 0;
            } else {
                $this->cfCombine = Arr::prepend($this->cfCombine, [], $kode);
                $this->cfCombine[$kode] = $this->prmis[$kode][0] + $this->prmis[$kode][1] * (1 - $this->prmis[$kode][0]);
                // dd($this->cfCombine);
                // $cek = [];
                for ($i = 2; $i < count($this->prmis[$kode]); $i++) {
                    // array_push($cek, $this->prmis[$kode][$i]);
                    $this->cfCombine[$kode] = $this->cfCombine[$kode] + $this->prmis[$kode][$i] * (1 - $this->cfCombine[$kode]);
                }
            }

            // dd($cek);
        }
        // dd($this->cfCombine);

        $this->layoutHasil = 1;
    }

    public function kembaliCek()
    {
        $this->layoutHasil = 0;
    }
}
