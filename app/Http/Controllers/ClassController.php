<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClassesRequest $request)
    {
        Classes::create($request->validated());
        return redirect()->route('classes.index')->with('Sukses','Kelas Baru Berhasil Ditambahkn');
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
    public function edit(Classes $class)
    {
        return view('classes.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassesRequest $request, Classes $classes)
    {
        $classes->update($request->validated());
        return redirect()->route('classes.index')->with('Sukses','Kelas Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class)
    {
        try {
            $class->delete();

            return redirect()->route('classes.index')->with('Sukses','Kelas Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->route('classes.index')->with('Gagal','Kelas Masih Berhubungan Dengan Tabel Lain');
        }
    }
}
