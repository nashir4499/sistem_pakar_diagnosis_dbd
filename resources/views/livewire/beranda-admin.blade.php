@section('title', 'Dashboard')
<div class="container-fluid">
    <div class="header text-center">
        <h1 class="header-title">
            Selamat Datang Di Halaman Admin Sistem Pakar Diagnosis Demam Berdarah
        </h1>
    </div>

    <div class="row mb-3">
        <div class="col-sm-6 offset-3">
            <div class="card rounded-pill">
                <div class="card-header text-center">
                    <h4 class="p-3">Sistem pakar adalah program komputer yang menyimulasi penilaian dan perilaku manusia atau organisasi yang memiliki pengetahuan dan pengalaman ahli dalam bidang tertentu. Pada sistem pakar yang dikembangkan disini lebih mengarah kepada sistem pakar diagnosis penyakir demam berdarah</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <a href="{{route('diagnosa')}}">
                <div class="card rounded-pill b-admin-item">
                    <div class="card-header text-center">
                        <span style="font-size: 3em; color: Tomato;">
                            <i class="fas fa-virus"></i>
                        </span>
                        <h4 style="font-size: 30px"><b>Diagnosa</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{route('gejala')}}">
                <div class="card rounded-pill b-admin-item">
                    <div class="card-header text-center">
                        <span style="font-size: 3em; color: Mediumslateblue;">
                            <i class="fas fa-head-side-cough"></i>
                        </span>
                        <h4 style="font-size: 30px"><b>Gejala</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{route('relasi')}}">
                <div class="card rounded-pill b-admin-item">
                    <div class="card-header text-center">
                        <span style="font-size: 3em; color: Dodgerblue;">
                            <i class="fas fa-capsules"></i>
                        </span>
                        <h4 style="font-size: 30px"><b>Relasi</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{route('rule')}}">
                <div class="card rounded-pill b-admin-item">
                    <div class="card-header text-center">
                        <span style="font-size: 3em; color: yellow;">
                            <i class="fas fa-balance-scale"></i>
                        </span>
                        <h4 style="font-size: 30px"><b>Rule</b></h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
