@extends('mahasiswa.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Mahasiswa</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="number" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input class="form-control" name="nama" placeholder="Nama"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelmain</strong>
                <div class="form-check form-check-inline form-control">
                    <label for="jnskelamin">
                        <input type="radio" name="jnskelamin" value="L">Laki-Laki
                        <input type="radio" name="jnskelamin" value="P">Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea name="alamat" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>KODE JURUSAN:</strong>
                <select name="kdjurusan" class="form-control">
                    <option value="#" @checked(true)> --PILIH--</option>
                    <option value="KD01">[KD01]Teknik Informatika</option>
                    <option value="KD02">[KD02]Hukum</option>
                    <option value="KD03">[KD03]Ekonomi   </option>
                    <option value="KD05">[KD04]Sastra Inggris</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection