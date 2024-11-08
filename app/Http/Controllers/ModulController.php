<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModulRequest;
use App\Http\Requests\UpdateModulRequest;
use App\Models\Classes;
use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Modul::with('classes')->get();
        return view('modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModulRequest $request)
    {
        Modul::create($request->validated());
        return redirect()->route('modules.index')->with('Sukses', 'Data Modul Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModulRequest $request, Modul $modul)
    {
        $modul->update($request->validated());
        return redirect()->route('modules.update')->with('Sukses','Data Modul Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        try {
            $modul->delete();
            return redirect()->route('modules.index')->with('Sukses','Data Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->route('modules.index')->with('Gagal','Data Gagal Dihapus');
        }
    }
}
