<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use App\Models\PertanyaanSurvey;
use App\Models\Survey;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function biodata()
    {
        return view("siswa.game.biodata");

    }

    public function biodata_store(Request $request)
    {
        $data = $request->all();
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
        ]);

        // Simpan data ke dalam tabel data_diri
        $dataDiri = DataDiri::create([
            'nama' => $validated['nama'],
            'asal_sekolah' => $validated['asal_sekolah'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'alamat' => $validated['alamat'],
        ]);

        // Setelah berhasil disubmit, arahkan pengguna ke halaman survey
        // return redirect('/survey')->with('success', 'Biodata berhasil disubmit! Silakan isi survey.');
        return redirect('/');
    }

    public function preTest()
    {
        $pertanyaan = PertanyaanSurvey::where('tipe_survey','pra')->get();
        return view('siswa.game.survey1', compact('pertanyaan'));
    }

    public function storePreTest(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'jawaban' => 'required|array', // Jawaban harus berupa array
            'jawaban.*' => 'required|integer|min:1|max:5', // Setiap jawaban adalah nilai 1-5
        ]);

        // $idDataDiri = $request->session()->get('id_data_diri'); // Ambil id_data_diri dari session
        // if (!$idDataDiri) {
        //     return redirect('/biodata')->withErrors('Data diri belum diisi.');
        // }

        // Loop melalui setiap jawaban yang diterima
        foreach ($validated['jawaban'] as $idPertanyaanSurvey => $jawaban) {
            Survey::create([
                'id_data_diri' => 1,
                'id_pertanyaan_survey' => $idPertanyaanSurvey,
                'jawaban' => $jawaban,
            ]);
        }

        // Redirect setelah berhasil menyimpan
        return redirect('/')->with('success', 'Survey berhasil disimpan! Selamat bermain.');
    }


    public function index()
    {
        //
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
