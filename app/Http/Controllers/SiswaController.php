<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $siswas = Siswa::latest()->paginate(5);
  
        return view('admin.index',compact('siswas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
  
        Siswa::create([
            'user_id' => Auth::user()->id,
            'nis' => $request->input('nis'),
            'nama' => $request->input('nama'),
            'jns_kelamin' => $request->input('jns_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'alamat' => $request->input('alamat'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'kelas' => $request->input('kelas'),
            'jurusan' => $request->input('jurusan'),
        ]);
   
        return redirect()->route('home')
                        ->with('success','Anda berhasil mendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('admin.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jns_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
  
        $siswa->update($request->all());
   
        return redirect()->route('admin.home')
                        ->with('success','Anda berhasil mendaftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
  
        return redirect()->route('admin.home')
                        ->with('success','siswa deleted successfully');
    }

    public function cetak_pdf()
    {
    	$siswas = Siswa::all();
 
    	$pdf = PDF::loadview('admin/siswa_pdf',['siswas'=>$siswas]);
    	return $pdf->download('laporan-siswa-pdf');
    }
}
