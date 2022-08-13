<?php

namespace App\Exports;

use App\Models\MitraSurvey;
use Maatwebsite\Excel\Concerns\FromCollection;

class MitraSurveyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MitraSurvey::all();
    }
}
