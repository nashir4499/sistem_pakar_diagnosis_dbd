@extends('layouts.umum')

@section('title', 'Home')

@section('content')

{{-- Bagian Atas --}}
<div class="container-fluid bagian-atas">
    <div class="container">
        <div class="row align-vertical">
            <div class="col-md-6 text-center">
                <div class="isi-atas">
                    <h5 style="font-weight: bold">Selamat Datang Di Website Sistem Pakar Diagnosis Demam Berdarah</h5>
                    <p class="mt-4">Sistem pakar adalah program komputer yang menyimulasi penilaian dan perilaku manusia atau organisasi yang memiliki pengetahuan dan pengalaman ahli dalam bidang tertentu. Pada sistem pakar yang dikembangkan disini lebih mengarah kepada sistem pakar diagnosis penyakir demam berdarah</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Bagian Tengah --}}
<div class="container-fluid bagian-tengah mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center offset-md-6">
                <div class="isi-atas">
                    <h5 style="font-weight: bold">Apa Itu Demam Berdarah?</h5>
                    <p class="mt-4">DBD atau demam berdarah dengue adalah penyakit yang disebabkan oleh salah satu dari empat virus dengue. Demam berdarah merupakan penyakit yang mudah menular. Sarana penularan demam berdarah sendiri berasal dari gigitan nyamuk Aedes aegypti dan Aedes albocpictus.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center offset-md-6">
                <div class="isi-atas">
                    <h5 style="font-weight: bold">Penyebab Demam Berdarah</h5>
                    <p class="mt-4">Penyakit demam berdarah disebabkan oleh virus dengue yang ditularkan oleh nyamuk
                        Aedes aegypti dan Aedes albopictus. Kedua nyamuk dapat menggigit di pagi hari sampai
                        sore menjelang petang. Penularan terjadi saat nyamuk menggigit dan menghisap darah
                        seseorang yang sudah terinfeksi virus dengue, ketika nyamuk tersebut mengigit orang lain,
                        maka virus akan tersebar. Hal tersebut terjadi karena nyamuk berperan sebagai medium
                        pembawa (carrier) virus dengue tersebut</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Bagian Bawah --}}
<div class="container-fluid bagian-bawah mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="isi-atas">
                    <h5 style="font-weight: bold">Diagnosis Demam Berdarah</h5>
                    <p class="mt-4">Diagnosis penyakit demam berdarah lebih lanjut, akan dilakukan dengan melakukan
                        pemeriksaan fisik dan wawancara medis. Selain itu pemeriksaan penunjang, seperti
                        pemeriksaan darah di laboratorium juga harus dilakukan. Sebaiknya, setelah merasakan
                        ada gejala-gejala demam berdarah, segera konsultasi dokter di Halodoc atau langsung
                        kunjungi rumah sakit terdekat, agar bisa langsung dilakukan diagnosis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="isi-atas">
                    <h5 style="font-weight: bold">Kapan Harus Ke Dokter?</h5>
                    <p class="mt-4">Jika sudah melakukan pencegahan, tetapi demam berdarah masih menyerang dan
                        mengganggu aktivitas sehari-hari, segera kunjungi dokter untuk meminta saran.
                        Penanganan sedini mungkin akan membantu mencegah munculnya masalah-masalah
                        yang lebih parah lagi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
