@extends('partials.template')

@section('container')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">ID</h5>
      <p class="card-text">{{ $screening->id }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">ID Petugas</h5>
      <p class="card-text">{{ $screening->petugas_id }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Nama</h5>
      <p class="card-text">{{ $screening->nama }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">No HP</h5>
      <p class="card-text">{{ $screening->noHP }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Tanggal Lahir</h5>
      <p class="card-text">{{ $screening->tglLahir }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Vaksin Dosis ke-</h5>
      <p class="card-text">{{ $screening->dosisVaksin }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Tanggal Vaksin</h5>
      <p class="card-text">{{ $screening->tglVaksin }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Suhu</h5>
      <p class="card-text">{{ $screening->suhu }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Tekanan Darah</h5>
      <p class="card-text">{{ $screening->tekananDarah }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah ada kontak dengan orang yang sedang dalam pemeriksaan/terkonfirmasi/sedang dalam perawatan karena penyakit COVID-19 dalam waktu 14 hari terakhir?</h5>
      <p class="card-text">{{ $screening->p1 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Jika pertanyaan nomor 1 (satu) Ya dan mengalami gejala
        demam batuk/pilek/sesak napas dalam 7 hari terakhir?
        </h5>
      <p class="card-text">{{ $screening->p2 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda pernah terkonfirmasi menderita COVID-19?</h5>
      <p class="card-text">{{ $screening->p3 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda sedang hamil atau menyusui? </h5>
      <p class="card-text">{{ $screening->p4 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><b> Pertanyaan untuk vaksinasi ke-1</b><br>
        Apakah Anda memiliki riwayat alergi berat seperti sesak
        napas, bengkak dan urtikaria seluruh badan atau reaksi berat
        lainnya karena vaksin?<br>
        <b>Pertanyaan untuk vaksinasi ke-2</b><br>
        Apakah Anda memiliki riwayat alergi berat atau mengalami
        gejala sesak napas, bengkak dan urtikaria seluruh badan
        setelah divaksinasi COVID-19 sebelumnya?
        </h5>
      <p class="card-text">{{ $screening->p5 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda sedang menderita penyakit jantung, penyakit
        ginjal kronis/cuci darah dan penyakit hati/liver?</h5>
      <p class="card-text">{{ $screening->p6 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda sedang menderita dan mendapat pengobatan
        penyakit kanker?</h5>
      <p class="card-text">{{ $screening->p7 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda sedang mendapat pengobatan untuk gangguan
        pembekuan darah, defisiensi imun dan penerima produk
        darah/transfusi?</h5>
      <p class="card-text">{{ $screening->p8 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda memiliki riwayat penyakit epilepsi?</h5>
      <p class="card-text">{{ $screening->p9 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda menderita penyakit Diabetes Melitus?</h5>
      <p class="card-text">{{ $screening->p10 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda menderita HIV?</h5>
      <p class="card-text">{{ $screening->p11 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda memiliki penyakit paru (asma, PPOK)?</h5>
      <p class="card-text">{{ $screening->p12 }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Apakah Anda mendapatkan vaksinasi lain kurang dari satu
        bulan ke belakang?</h5>
      <p class="card-text">{{ $screening->p13 }}</p>
    </div>
  </div>
  <h4><b>Pertanyaan tambahan bagi sasaran lansia (≥60 tahun):</b></h4>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">
        1. Apakah Anda mengalami kesulitan untuk naik
        10 anak tangga?</h5>
      <p class="card-text">{{ $screening->p14a }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">2. Apakah Anda sering merasa kelelahan?</h5>
      <p class="card-text">{{ $screening->p14b }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">3. Apakah Anda memiliki 5 atau lebih dari 11
        penyakit berikut (Hipertensi, diabetes, kanker,
        penyakit paru kronis, serangan jantung, gagal
        jantung kongestif, nyeri dada, asma, nyeri
        sendi, stroke dan penyakit ginjal)?</h5>
      <p class="card-text">{{ $screening->p14c }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">4. Apakah Anda mengalami kesulitan berjalan kirakira 100 sampai 200meter?</h5>
      <p class="card-text">{{ $screening->p14d }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">5. Apakah Anda mengalami penurunan berat badan
        yang bermakna dalam setahun terakhir?</h5>
      <p class="card-text">{{ $screening->p14e }}</p>
    </div>
  </div>
<div class="d-flex justify-content-start">
    <a href="{{ route('screening.index') }}">
        <button class="btn btn-icon btn-secondary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
        <span class="btn-inner--text">Kembali</span>
    </button>
    </a>
</div>
@endsection