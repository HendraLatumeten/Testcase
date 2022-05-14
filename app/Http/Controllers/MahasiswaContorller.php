<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaContorller extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->paginate(5);
      
        return view('mahasiswa.index',compact('mahasiswa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  

    public function create()
    {
        return view('mahasiswa.create');
      
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'nim' => 'required|unique:mahasiswa',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'jnskelamin' => 'required',
            'alamat' => 'required',
            'kdjurusan' => 'required',
        ]);
       
        Mahasiswa::create($request->all());
       
        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa created successfully.');
    }
    
    public function show(Mahasiswa $mahasiswa)
    {

     
        return view('mahasiswa.show',compact('mahasiswa'));

    }
  
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',compact('mahasiswa'));

    }

    public function update(Request $request, Mahasiswa $Mahasiswa)
    {
     
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'jnskelamin' => 'required',
            'alamat' => 'required',
            'kdjurusan' => 'required',
            
        ]);

      
        $Mahasiswa->update($request->all());
      
        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa updated successfully');
    }

    public function destroy(Mahasiswa $Mahasiswa)
    {
        $Mahasiswa->delete();
       
        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa deleted successfully');
    }
}
