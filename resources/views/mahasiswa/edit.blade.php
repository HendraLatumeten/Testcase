@extends('mahasiswa.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Mahasiswa</h2>
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
  
    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIM:</strong>
                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" placeholder="NIM">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input class="form-control" name="nama" placeholder="Nama" value="{{ $mahasiswa->nama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat lahir:</strong>
                    <input type="text" name="tempatlahir" value="{{ $mahasiswa->tempatlahir }}" class="form-control" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelmain</strong>
                    <div class="form-check form-check-inline form-control">
                        <label for="jnskelamin">
                            <input type="radio" name="jnskelamin" value="L" {{ $mahasiswa->jnskelamin == 'L' ? 'checked' : '' }}>Laki-Laki
                            <input type="radio" name="jnskelamin" value="P" {{ $mahasiswa->jnskelamin == 'P' ? 'checked' : '' }}>Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea name="alamat" class="form-control">{{$mahasiswa->alamat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>KODE JURUSAN:</strong>
                <select name="kdjurusan" class="form-control">
                    <option value="#"> --PILIH--</option>
                    <option value="KD01" {{ $mahasiswa->kdjurusan == 'KD01' ? 'selected' : '' }}>[KD01]Teknik Informatika</option>
                    <option value="KD02" {{ $mahasiswa->kdjurusan == 'KD02' ? 'selected' : '' }}>[KD02]Hukum</option>
                    <option value="KD03" {{ $mahasiswa->kdjurusan == 'KD03' ? 'selected' : '' }}>[KD03]Ekonomi</option>
                    <option value="KD04" {{ $mahasiswa->kdjurusan == 'KD04' ? 'selected' : '' }}>[KD04]Sastra</option>

                </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection