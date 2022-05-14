@extends('mahasiswa.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>TestCase || CRUD Data Mahasiswa</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Create New mahasiswa</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $row)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$row->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$row->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$row->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $mahasiswa->links() !!}
    </div>
      
@endsection