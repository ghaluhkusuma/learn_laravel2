@extends("layout/aplikasi")

@section("konten")
    <form method="post" action="/siswa">
        @csrf
      <div class="mb-3">
        <label for="nomor_induk" class="form-label">Nomor Induk</label>
        <input type="text" id="nomor-induk" class="form-control" name="nomor_induk" value="{{Session::get("nomor_induk")}}">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" class="form-control" name="nama" value="{{Session::get("nama")}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat">{{Session::get("alamat")}}</textarea>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" >SIMPAN</button>
        </div>  
    </div>
    </form>
@endsection