<?php

namespace App\Http\Controllers\Backend;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['page_title'] = 'Buku';
        $data['data'] = Buku::orderBy('created_at', 'desc')->get();
        
        return view('backend.pages.buku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page_title'] = 'Tambah Data Buku';
        return view('backend.pages.buku.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = new Buku();
            $data->title = $request->title;
            if ($request->hasFile('cover')) {
                $image = $request->file('cover');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/cover/');
                $image->move($destinationPath, $name);
                $data->cover = $name;
            }
            $dokumenval = $request->file('file');
            if ($dokumenval != null) {
                $documentPath = public_path('documents/pdf/');
                $documentName = $dokumenval->getClientOriginalName();
                $i = 1;
                while (file_exists($documentPath . $documentName)) {
                    $documentName = pathinfo($dokumenval->getClientOriginalName(), PATHINFO_FILENAME) . "($i)." . $dokumenval->getClientOriginalExtension();
                    $i++;
                }
                $dokumenval->move($documentPath, $documentName);
                $data->file = $documentName;
            }

            $data->deskripsi = $request->deskripsi;
            $data->save();

            session()->flash('success', 'Data Berhasil Disimpan!');
            return redirect()->route('buku');
        } catch (\Throwable $th) {
            session()->flash('failed', $th->getMessage());
            return redirect()->route('buku');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['page_title'] = 'Edit Data Buku';
        $data['buku'] = Buku::find($id);

        return view('backend.pages.buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = Buku::find($id);
            $data->title = $request->title;
            if ($request->hasFile('cover')) {
                $image = $request->file('cover');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/cover/');
                $image->move($destinationPath, $name);
                $data->cover = $name;
            }

            $dokumenval = $request->file('file');
    
            if ($dokumenval != null) {
                $documentPath = public_path('documents/pdf/');
                $documentName = $dokumenval->getClientOriginalName();
                $i = 1;
                while (file_exists($documentPath . $documentName)) {
                    $documentName = pathinfo($dokumenval->getClientOriginalName(), PATHINFO_FILENAME) . "($i)." . $dokumenval->getClientOriginalExtension();
                    $i++;
                }
                $dokumenval->move($documentPath, $documentName);
                $data->file = $documentName;
            }

            $data->deskripsi = $request->deskripsi;
            $data->save();

            session()->flash('success', 'Data Berhasil Disimpan!');
            return redirect()->route('buku');
        } catch (\Throwable $th) {
            session()->flash('failed', $th->getMessage());
            return redirect()->route('buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Buku::find($id);
            $data->delete();

            session()->flash('success', 'Data Berhasil dihapus!');
            return redirect()->route('buku');
        } catch (\Throwable $th) {
            session()->flash('failed', $th->getMessage());
            return redirect()->route('buku');
        }
    }
}
