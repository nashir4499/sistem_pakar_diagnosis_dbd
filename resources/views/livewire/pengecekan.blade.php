@section('title', 'Pengecekan')

<div class="container-fluid bagian-pengecekan">
    <div class="container">
        <div class="row row-pengecekan">

            @if ($layoutHasil === 0)

                <div class="col-md-6 offset-md-3 text-center">
                    <div class="pengecekan-konten">
                        <h4 style="font-weight: bold">Silahkan Jawab Pertanyaan Berikut</h4>
                        {{-- <p class="mt-4">Sistem pakar adalah program komputer yang menyimulasi penilaian dan perilaku manusia atau organisasi yang memiliki pengetahuan dan pengalaman ahli dalam bidang tertentu. Pada sistem pakar yang dikembangkan disini lebih mengarah kepada sistem pakar diagnosis penyakir demam berdarah</p> --}}
                        @foreach ($gejalas as $gejala)
                            <h6 class="mt-5">Apakah Anda Mengalami <b>{{$gejala->nama_gejala}}</b></h6>
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
                                            <label class="" for="inlineRadio1">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0.2">
                                            <label class="" for="inlineRadio1">Kurang Yakin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="0.4">
                                            <label class="" for="inlineRadio3">Sedikit Yakin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="0.6">
                                            <label class="" for="inlineRadio4">Cukup Yakin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="0.8">
                                            <label class="" for="inlineRadio5">Yakin</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check form-check-inline">
                                            <input class="" wire:model="cfUser.{{$gejala->kode}}" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="1">
                                            <label class="" for="inlineRadio6">Sangat Yakin</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="mt-4 row" >
                            <div class="col-md-4 offset-4">
                                <div>
                                    @if ($gejalas->hasPages())
                                        <nav>
                                            <ul class="pagination">
                                                {{-- Previous Page Link --}}
                                                @if ($gejalas->onFirstPage())
                                                    <li class="page-item disabled" aria-disabled="true">
                                                        <span class="page-link">@lang('pagination.previous')</span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <button type="button" class="page-link" wire:click="previousPage" wire:loading.attr="disabled" rel="prev">@lang('pagination.previous')</button>
                                                    </li>
                                                @endif

                                                {{-- Next Page Link --}}
                                                @if ($gejalas->hasMorePages())
                                                    <li class="page-item">
                                                        <button type="button" class="page-link" wire:click="nextPage" wire:loading.attr="disabled" rel="next">@lang('pagination.next')</button>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled" aria-disabled="true">
                                                        <span class="page-link">@lang('pagination.next')</span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    @endif
                                </div>
                                {{-- paging --}}
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary rounded-circle" wire:click="premisTunggal" wire:loading.attr="disabled" >Hasil</button>
                                {{-- @if (!$gejalas->hasMorePages()) --}}
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <div class="col-md-6 offset-md-3 text-center">
                    <div class="pengecekan-konten">
                        <h4 style="font-weight: bold" class="mb-4">Hasil Pengecekan</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Kemungkinan</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($diagnosas as $diagnosa)
                                <tr>
                                    <th>{{$diagnosa->nama_diagnosa}}</th>
                                    <th>{{$cfCombine[$diagnosa->kode]*100}}%</th>
                                </tr>
                                <tr>
                                    @if ($cfCombine[$diagnosa->kode]*100<10)

                                    <td colspan="2">-</td>
                                    @else

                                    <td colspan="2">{{$diagnosa->keterangan}}</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{-- <h5>Kemungkinan anda terkena Demam Berdarah adalah {{$cfCombine*100}}%</h5> --}}
                        <div class="mt-4 row" >
                            <div class="col-md-4">
                                {{-- @if (!$gejalas->hasMorePages()) --}}
                                    <button type="button" class="btn btn-warning rounded-circle" wire:click="kembaliCek" wire:loading.attr="disabled" >Kembali</button>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
