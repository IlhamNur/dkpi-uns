<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\MitraSurvey;
use App\Models\Instansi;
use App\Models\Kerjasama;
use App\Models\Lingkup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.index',[
            'title' => 'layanan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mou = '';
        $pks = '';
        $id = 1;
        if ($request->file('mou')){
            $mou = $request->file('mou')->store('mou');
            $validatedData['ketentuan_mou'] = $mou;
            }
        if ($request->file('pks')){
            $pks = $request->file('pks')->store('pks');
            $validatedData['ketentuan_pks'] = $pks;
            }
 
            Layanan::where('id', $id)->update($validatedData);

            return redirect('/layanan')->with('success', 'Data berhasil diubah!');
    }
    public function ketentuan_mou()
    {
        $id = 1;
        $file = Layanan::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->ketentuan_mou, 'ketentuan MoU.docx');
        // return $file;
    }
    public function ketentuan_pks()
    {	
      	$id = 1;
        $file = Layanan::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->ketentuan_pks, 'ketentuan PKS.docx');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLayananRequest  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLayananRequest $request, Layanan $layanan)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }

    public function showForm(Request $request)
    {   
        return view('layanan.surveykepuasan');
    }

   	public function storeForm(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email',
            'instansi' => 'required',
            'no_hp' => 'required',
            'alamat_instansi' => 'required',
            'jenis_instansi' => 'required',
            'unit_kerjasama' => 'required',
            'ruang_lingkup' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'saran1' => 'required',
            'saran2' => 'required'
        ]);

            $mitra_survey = new MitraSurvey;
            $mitra_survey->nama_lengkap = $request->nama_lengkap;
            $mitra_survey->jabatan = $request->jabatan;
            $mitra_survey->email = $request->email;
            $mitra_survey->instansi = $request->instansi;
            $mitra_survey->no_hp = $request->no_hp;
            $mitra_survey->alamat_instansi = $request->alamat_instansi;
            $mitra_survey->q1 = $request->q1;
            $mitra_survey->q2 = $request->q2;
            $mitra_survey->q3 = $request->q3;
            $mitra_survey->q4 = $request->q4;
            $mitra_survey->q5 = $request->q5;
            $mitra_survey->q6 = $request->q6;
            $mitra_survey->q7 = $request->q7;
            $mitra_survey->q8 = $request->q8;
            $mitra_survey->q9 = $request->q9;
            $mitra_survey->q10 = $request->q10;
            $mitra_survey->q11 = $request->q11;
            $mitra_survey->q12 = $request->q12;
            $mitra_survey->q13 = $request->q13;
            $mitra_survey->saran1 = $request->saran1;
            $mitra_survey->saran2 = $request->saran2;
            $mitra_survey->save();

            if ($request->has('jenis_instansi')) {
                foreach ($request['jenis_instansi'] as $jenisInstansiId) {
                    Instansi::create([
                        'mitra_surveys_id' => $mitra_survey->id,
                        'jenis_instansis_id' => (int) $jenisInstansiId
                    ]);
                }
            }

            if ($request->has('unit_kerjasama')) {
                foreach ($request['unit_kerjasama'] as $unitKerjasamaId) {
                    Kerjasama::create([
                        'mitra_surveys_id' => $mitra_survey->id,
                        'unit_kerjasamas_id' => (int) $unitKerjasamaId
                    ]);
                }
            }

            if ($request->has('ruang_lingkup')) {
                foreach ($request['ruang_lingkup'] as $ruangLingkupId) {
                    Lingkup::create([
                        'mitra_surveys_id' => $mitra_survey->id,
                        'ruang_lingkups_id' => (int) $ruangLingkupId
                    ]);
                }
            }

        return back()->with('success', 'Terima kasih sudah bersedia mengisi survey kami');
    }

}