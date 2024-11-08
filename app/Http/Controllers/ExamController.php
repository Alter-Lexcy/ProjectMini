<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExamsRequest;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::with('classes')->get();
        return view('exams.index', compact('exams'));
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
    public function store(Request $request)
    {
        Exam::create($request->validated());
        return redirect()->route('exams.index')->with('Sukses','Data Berhasil Ditambah');
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
    public function update(StoreExamsRequest $request, Exam $exam)
    {
        $exam->update($request->validated());

        return redirect()->route('exams.index')->with('Sukses','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        try {
            $exam->delete();
            return redirect()->route('exams.index')->with('Sukses','Data Berhasil Ditambah');
        } catch (\Exception $e) {

            return redirect()->route('exams.index')->with('Sukses','Data Berhasil Ditambah');
        }
    }
}
