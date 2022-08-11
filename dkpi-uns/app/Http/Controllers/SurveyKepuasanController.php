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
        // for ($i = 1; $i <= 13; $i++) {
            $mitra_survey = MitraSurvey::latest()->filter(request(['nama_lengkap']))->paginate(5)->withQueryString();
            $penilaian_kepuasan = PenilaianKepuasan::get();
            $kurang_puas_q1 = MitraSurvey::where("q1", '=', 'Kurang Puas')->get();
            $kurang_puas_q2 = MitraSurvey::where("q2", '=', 'Kurang Puas')->get();
            $kurang_puas_q3 = MitraSurvey::where("q3", '=', 'Kurang Puas')->get();
            $kurang_puas_q4 = MitraSurvey::where("q4", '=', 'Kurang Puas')->get();
            $kurang_puas_q5 = MitraSurvey::where("q5", '=', 'Kurang Puas')->get();
            $kurang_puas_q6 = MitraSurvey::where("q6", '=', 'Kurang Puas')->get();
            $kurang_puas_q7 = MitraSurvey::where("q7", '=', 'Kurang Puas')->get();
            $kurang_puas_q8 = MitraSurvey::where("q8", '=', 'Kurang Puas')->get();
            $kurang_puas_q9 = MitraSurvey::where("q9", '=', 'Kurang Puas')->get();
            $kurang_puas_q10 = MitraSurvey::where("q10", '=', 'Kurang Puas')->get();
            $kurang_puas_q11 = MitraSurvey::where("q11", '=', 'Kurang Puas')->get();
            $kurang_puas_q12 = MitraSurvey::where("q12", '=', 'Kurang Puas')->get();
            $kurang_puas_q13= MitraSurvey::where("q13", '=', 'Kurang Puas')->get();
            $puas_q1 = MitraSurvey::where("q1", '=', 'Puas')->get();
            $puas_q2 = MitraSurvey::where("q2", '=', 'Puas')->get();
            $puas_q3 = MitraSurvey::where("q3", '=', 'Puas')->get();
            $puas_q4 = MitraSurvey::where("q4", '=', 'Puas')->get();
            $puas_q5 = MitraSurvey::where("q5", '=', 'Puas')->get();
            $puas_q6 = MitraSurvey::where("q6", '=', 'Puas')->get();
            $puas_q7 = MitraSurvey::where("q7", '=', 'Puas')->get();
            $puas_q8 = MitraSurvey::where("q8", '=', 'Puas')->get();
            $puas_q9 = MitraSurvey::where("q9", '=', 'Puas')->get();
            $puas_q10 = MitraSurvey::where("q10", '=', 'Puas')->get();
            $puas_q11 = MitraSurvey::where("q11", '=', 'Puas')->get();
            $puas_q12 = MitraSurvey::where("q12", '=', 'Puas')->get();
            $puas_q13 = MitraSurvey::where("q13", '=', 'Puas')->get();
            $sangat_puas_q1 = MitraSurvey::where("q1", '=', 'Sangat Puas')->get();
            $sangat_puas_q2 = MitraSurvey::where("q2", '=', 'Sangat Puas')->get();
            $sangat_puas_q3 = MitraSurvey::where("q3", '=', 'Sangat Puas')->get();
            $sangat_puas_q4 = MitraSurvey::where("q4", '=', 'Sangat Puas')->get();
            $sangat_puas_q5 = MitraSurvey::where("q5", '=', 'Sangat Puas')->get();
            $sangat_puas_q6 = MitraSurvey::where("q6", '=', 'Sangat Puas')->get();
            $sangat_puas_q7 = MitraSurvey::where("q7", '=', 'Sangat Puas')->get();
            $sangat_puas_q8 = MitraSurvey::where("q8", '=', 'Sangat Puas')->get();
            $sangat_puas_q9 = MitraSurvey::where("q9", '=', 'Sangat Puas')->get();
            $sangat_puas_q10 = MitraSurvey::where("q10", '=', 'Sangat Puas')->get();
            $sangat_puas_q11 = MitraSurvey::where("q11", '=', 'Sangat Puas')->get();
            $sangat_puas_q12 = MitraSurvey::where("q12", '=', 'Sangat Puas')->get();
            $sangat_puas_q13 = MitraSurvey::where("q13", '=', 'Sangat Puas')->get();
            return view('surveykepuasan.index', [
                'title' => 'Survey Kepuasan',
                'mitra_surveys' => $mitra_survey,
                'penilaian_kepuasans' => $penilaian_kepuasan,
                "kurang_puases_q1" => $kurang_puas_q1,
                "kurang_puases_q2" => $kurang_puas_q2,
                "kurang_puases_q3" => $kurang_puas_q3,
                "kurang_puases_q4" => $kurang_puas_q4,
                "kurang_puases_q5" => $kurang_puas_q5,
                "kurang_puases_q6" => $kurang_puas_q6,
                "kurang_puases_q7" => $kurang_puas_q7,
                "kurang_puases_q8" => $kurang_puas_q8,
                "kurang_puases_q9" => $kurang_puas_q9,
                "kurang_puases_q10" => $kurang_puas_q10,
                "kurang_puases_q11" => $kurang_puas_q11,
                "kurang_puases_q12" => $kurang_puas_q12,
                "kurang_puases_q13" => $kurang_puas_q13,
                "puases_q1" => $puas_q1,
                "puases_q2" => $puas_q2,
                "puases_q3" => $puas_q3,
                "puases_q4" => $puas_q4,
                "puases_q5" => $puas_q5,
                "puases_q6" => $puas_q6,
                "puases_q7" => $puas_q7,
                "puases_q8" => $puas_q8,
                "puases_q9" => $puas_q9,
                "puases_q10" => $puas_q10,
                "puases_q11" => $puas_q11,
                "puases_q12" => $puas_q12,
                "puases_q13" => $puas_q13,
                "sangat_puases_q1" => $sangat_puas_q1,
                "sangat_puases_q2" => $sangat_puas_q2,
                "sangat_puases_q3" => $sangat_puas_q3,
                "sangat_puases_q4" => $sangat_puas_q4,
                "sangat_puases_q5" => $sangat_puas_q5,
                "sangat_puases_q6" => $sangat_puas_q6,
                "sangat_puases_q7" => $sangat_puas_q7,
                "sangat_puases_q8" => $sangat_puas_q8,
                "sangat_puases_q9" => $sangat_puas_q9,
                "sangat_puases_q10" => $sangat_puas_q10,
                "sangat_puases_q11" => $sangat_puas_q11,
                "sangat_puases_q12" => $sangat_puas_q12,
                "sangat_puases_q13" => $sangat_puas_q13,
            ]);
        // }
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