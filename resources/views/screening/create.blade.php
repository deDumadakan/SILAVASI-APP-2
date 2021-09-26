@extends('partials.template')

@section('container')
<h2>Form Screening</h2>
<form action="{{ url('screening')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="petugas_id" class="form-control-label">ID Petugas</label>
        <select class="form-control" id="petugas_id"  name="petugas_id"  value="{{ old('petugas_id') }}">
            <option value="1">Pilih ID Petugas</option>
          </select>
    </div>
    <div class="form-group">
        <label for="nik" class="form-control-label">NIK</label>
        <input class="form-control" type="text" id="nik" name="nik" value="{{ old('nik') }}">
        <span style="color:red">@error('nik')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="nama" class="form-control-label">Nama</label>
        <input class="form-control" type="text" id="nama" name="nama" value="{{ old('nama') }}">
        <span style="color:red">@error('nama')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="noHP" class="form-control-label">No HP</label>
        <input class="form-control" type="text" id="noHP" name="noHP"  value="{{ old('noHP') }}">
        <span style="color:red">@error('noHP')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="tglLahir" class="form-control-label">Tanggal Lahir</label>
        <input class="form-control" type="date" id="tglLahir" name="tglLahir"  value="{{ old('tglLahir') }}">
        <span style="color:red">@error('tglLahir')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="dosisVaksin" class="form-control-label">Vaksin Dosis ke-</label>
        <select class="form-control" id="dosisVaksin" name="dosisVaksin">
            @if (old('dosisVaksin') == "2")
            <option value="1">1</option>
            <option value="2" selected>2</option>
            @else
            <option value="1" selected>1</option>
            <option value="2">2</option>
            @endif
          </select>
    </div>
    <div class="form-group">
        <label for="tglVaksin" class="form-control-label">Tanggal Vaksin</label>
        <input class="form-control" type="date" id="tglVaksin" name="tglVaksin"  value="{{ old('tglVaksin') }}">
        <span style="color:red">@error('tglVaksin')
            {{ $message }}
        @enderror</span>
    </div>
    <div class="form-group">
        <label for="suhu" class="form-control-label">Suhu <small>*dalam celcius</small></label>
        <input class="form-control" type="text" id="suhu" name="suhu"  value="{{ old('suhu') }}">
        <span style="color:red">@error('suhu')
            {{ $message }}
        @enderror</span><br>
        <small>Suhu > 37,5 0C vaksinasi ditunda sampai sasaran sembuh</small>
    </div>
    <div class="form-group">
        <label for="tekananDarah" class="form-control-label">Tekanan Darah</label>
        <input class="form-control" type="text" id="tekananDarah" name="tekananDarah"  value="{{ old('tekananDarah') }}">
        <span style="color:red">@error('tekananDarah')
            {{ $message }}
        @enderror</span><br>
        <small>Jika tekanan darah >180/110 mmHg pengukuran
            tekanan darah diulang 30 – 60 menit kemudian. Jika
            masih tinggi maka vaksinasi ditunda sampai terkontrol</small>
    </div>
    <div class="form-group">
        <label for="p1" class="form-control-label">Apakah ada kontak dengan orang yang sedang dalam pemeriksaan/terkonfirmasi/sedang dalam perawatan karena penyakit COVID-19 dalam waktu 14 hari terakhir?</label>
        <select class="form-control" id="p1" name="p1">
            @if (old('p1') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya lihat pertanyaan di bawah</small>
    </div>
    <div class="form-group">
        <label for="p2" class="form-control-label">Jika pertanyaan di atas Ya dan mengalami gejala
            demam batuk/pilek/sesak napas dalam 7 hari terakhir?</label>
        <select class="form-control" id="p2" name="p2">
            @if (old('p2') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi ditunda sampai 14 hari setelah gejala muncul</small>
    </div>
    <div class="form-group">
        <label for="p3" class="form-control-label">Apakah Anda pernah terkonfirmasi menderita COVID-19?</label>
        <select class="form-control" id="p3" name="p3">
            @if (old('p3') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya: Vaksinasi ditunda sampai tiga (3) bulan sejak
            terkonfirmasi COVID-19</small>
    </div>
    <div class="form-group">
        <label for="p4" class="form-control-label">Apakah Anda sedang hamil atau menyusui?</label>
        <select class="form-control" id="p4" name="p4">
            @if (old('p4') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika sedang hamil vaksinasi ditunda sampai
            melahirkan Ibu menyusui boleh divaksinasi
            </small>
    </div>
    <div class="form-group">
        <label for="p5" class="form-control-label"><b> Pertanyaan untuk vaksinasi ke-1</b><br>
            Apakah Anda memiliki riwayat alergi berat seperti sesak
            napas, bengkak dan urtikaria seluruh badan atau reaksi berat
            lainnya karena vaksin?<br>
            <b>Pertanyaan untuk vaksinasi ke-2</b><br>
            Apakah Anda memiliki riwayat alergi berat atau mengalami
            gejala sesak napas, bengkak dan urtikaria seluruh badan
            setelah divaksinasi COVID-19 sebelumnya?</label>
        <select class="form-control" id="p5" name="p5">
            @if (old('p5') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi diberikan di Rumah Sakit atau tidak diberikan lagi untuk vaksinasi ke-2 </small>
    </div>
    <div class="form-group">
        <label for="p6" class="form-control-label">Apakah Anda sedang menderita penyakit jantung, penyakit
            ginjal kronis/cuci darah dan penyakit hati/liver?</label>
        <select class="form-control" id="p6" name="p6">
            @if (old('p6') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi tidak dapat diberikan
            </small>
    </div>
    <div class="form-group">
        <label for="p7" class="form-control-label">Apakah Anda sedang menderita dan mendapat pengobatan
            penyakit kanker?
            </label>
        <select class="form-control" id="p7" name="p7">
            @if (old('p7') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi tidak dapat diberikan
            <br>Jika sasaran sudah sembuh vaksinasi dapat diberikan
            </small>
    </div>
    <div class="form-group">
        <label for="p8" class="form-control-label">Apakah Anda sedang mendapat pengobatan untuk gangguan
            pembekuan darah, defisiensi imun dan penerima produk
            darah/transfusi?
            </label>
        <select class="form-control" id="p8" name="p8">
            @if (old('p8') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi ditunda dan dirujuk
            </small>
    </div>
    <div class="form-group">
        <label for="p9" class="form-control-label">Apakah Anda memiliki riwayat penyakit epilepsi?</label>
        <select class="form-control" id="p9" name="p9">
            @if (old('p9') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi dapat diberikan dalam keadaan
            terkontrol            
            </small>
    </div>
    <div class="form-group">
        <label for="p10" class="form-control-label">Apakah Anda menderita penyakit Diabetes Melitus?</label>
        <select class="form-control" id="p10" name="p10">
            @if (old('p10') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi dapat
            diberikan dalam keadaan terkontrol atau sedang
            minumobat diabetes teratur
            </small>
    </div>
    <div class="form-group">
        <label for="p11" class="form-control-label">Apakah Anda menderita HIV?</label>
        <select class="form-control" id="p11" name="p11">
            @if (old('p11') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi dapat diberikan dalam keadaan
            terkontrol dan minum obat teratur
            </small>
    </div>
    <div class="form-group">
        <label for="p12" class="form-control-label">Apakah Anda memiliki penyakit paru (asma, PPOK)? </label>
        <select class="form-control" id="p12" name="p12">
            @if (old('p12') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi dapat diberikan dalam kondisi terkontrol (tidak sesak)</small>
    </div>
    <div class="form-group">
        <label for="p13" class="form-control-label">Apakah Anda mendapatkan vaksinasi lain kurang dari satu
            bulan ke belakang?
            </label>
        <select class="form-control" id="p13" name="p13">
            @if (old('p13') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika Ya : vaksinasi ditunda sampai satu bulan setelah
            vaksinasi sebelumnya </small>
    </div>
    <div class="form-group">
        <label for="p14a" class="form-control-label"><b>Pertanyaan tambahan bagi sasaran lansia (≥60 tahun):</b><br>
            1. Apakah Anda mengalami kesulitan untuk naik
            10 anak tangga?
            </label>
        <select class="form-control" id="p14a" name="p14a">
            @if (old('p14a') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="p14b" class="form-control-label">2. Apakah Anda sering merasa kelelahan?
            </label>
        <select class="form-control" id="p14b" name="p14b">
            @if (old('p14b') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="p14c" class="form-control-label">3. Apakah Anda memiliki 5 atau lebih dari 11
            penyakit berikut (Hipertensi, diabetes, kanker,
            penyakit paru kronis, serangan jantung, gagal
            jantung kongestif, nyeri dada, asma, nyeri
            sendi, stroke dan penyakit ginjal)?
            </label>
        <select class="form-control" id="p14c" name="p14c">
            @if (old('p14c') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="p14d" class="form-control-label">4. Apakah Anda mengalami kesulitan berjalan kirakira 100 sampai 200meter?
            </label>
        <select class="form-control" id="p14d" name="p14d">
            @if (old('p14d') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="p14e" class="form-control-label">5. Apakah Anda mengalami penurunan berat badan
            yang bermakna dalam setahun terakhir?
            </label>
        <select class="form-control" id="p14e" name="p14e">
            @if (old('p14e') == "Ya")
            <option value="Tidak">Tidak</option>
            <option value="Ya" selected>Ya</option>
            @else
            <option value="Tidak" selected>Tidak</option>
            <option value="Ya">Ya</option>
            @endif
        </select>
        <small>Jika terdapat 3 atau lebih jawaban Ya maka vaksin tidak
            dapat diberikan
             </small>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>
<div class="d-flex justify-content-start">
    <a href="{{ route('screening.index') }}">
        <button class="btn btn-icon btn-secondary" type="button">
        <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
        <span class="btn-inner--text">Kembali</span>
    </button>
    </a>
</div>
@endsection