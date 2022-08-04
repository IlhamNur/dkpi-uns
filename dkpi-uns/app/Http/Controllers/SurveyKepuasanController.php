<?php
namespace App\Http\Controllers;

use App\Models\MitraSurvey;
use App\Models\PenilaianKepuasan;
use App\Models\Instansi;
use App\Models\Kerjasama;
use App\Models\Lingkup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SurveyKepuasanController extends Controller
{

//  Display a listing of the resource.

//  @return \Illuminate\Http\Response

    public function index()
    {
        $mitra_survey = MitraSurvey::latest()->filter(request(['nama_lengkap']))->paginate(5)->withQueryString();
        return view('surveykepuasan.index', [
            'title' => 'Survey Kepuasan',
            'mitra_surveys' => $mitra_survey
        ]);
    }

    public function show($id)
    {   
        $mitra_survey = MitraSurvey::find($id);
        $penilaian_kepuasans = PenilaianKepuasan::get();
        return view('surveykepuasan.show', compact('mitra_survey', "penilaian_kepuasans"), [
            'title' => 'Survey Kepuasan'
        ]);
    } 

    public function destroy($mitra_survey)
    {
        //
        Instansi::where('mitra_surveys_id', $mitra_survey)->delete();
        Kerjasama::where('mitra_surveys_id', $mitra_survey)->delete();
        Lingkup::where('mitra_surveys_id', $mitra_survey)->delete();
        MitraSurvey::destroy($mitra_survey);

        return redirect('/survey-kepuasan')
        ->with('success', 'Data berhasil dihapus');
    }
}