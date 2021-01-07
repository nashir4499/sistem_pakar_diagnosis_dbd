@section('title', 'Relasi')
<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Relasi
        </h1>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah
        </button>
        <!-- Modals -->
        @include('livewire/create-relasi')
        @if (session()->has('info'))
            <div class="alert alert-success" style="margin-top:10px;">
                {{ session('info') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header row">
                    <div class="col-sm-6">
                        <h2><b>Tabel Relasi</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <form class="form-inline d-flex justify-content-center md-form form-sm mt-0 search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input wire:model="cari" class="form-control form-control-sm ml-3 w-50" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables-basic" class="table table-striped dataTable dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatables-basic_info">
                            <thead>
                                <tr role="row">
                                    {{-- <button wire:click="sorting(nama)" type="button">V</button> --}}
                                    <th class="sorting_asc">No</th>
                                    <th class="sorting">Kode Penyakit</th>
                                    <th class="sorting">Kode Gejala</th>
                                    <th class="sorting">Certainty Factor</th>
                                    <th class="sorting">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($relasis as $relasi)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1 dtr-control">{{$loop->iteration}}</td>
                                        <td>({{$relasi->diagnosas_id}}) {{$relasi->diagnosa->nama_diagnosa}} </td>
                                        <td>({{$relasi->gejalas_id}}) {{$relasi->gejala->nama_gejala}}</td>
                                        <td class="text-center">{{$relasi->cf}}</td>
                                        <td>
                                            <button wire:click="edit('{{$relasi->id}}')" type="button" class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                            <button onclick="confirm('Yakin Ingin Menghapus {{$relasi->diagnosa->nama_diagnosa}} Dengan Gejala {{$relasi->gejala->nama_gejala}}?') || event.stopImmediatePropagation()" wire:click="delete('{{$relasi->id}}')" type="button" class="badge bg-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

