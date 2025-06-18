<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Lrkra;
use App\Models\RaporPendidikan;
use App\Models\Rkt;
use App\Services\InsightService;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles       = Article::latest('published_at')->take(6)->get();
        $data           = Lrkra::totalBiayaPerKegiatan()->get();
        $monthlyData    = Lrkra::perBulan()->get();
        $compareData    = Lrkra::perKegiatanCompare()->get();

        $raporChart     = RaporPendidikan::perKategoriNilai()->get();
        $raporPerTahun  = RaporPendidikan::perTahun()->get();
        $insightRapor   = InsightService::rapor();

        $rktPerTahun    = Rkt::perTahunDesc()->take(2)->get();
        $insightRKT     = InsightService::rkt($rktPerTahun);
        $insightMasalah = InsightService::masalahPBD();
        $insightBiaya = InsightService::biayaTertinggiLrkra();



        return view('welcome', compact(
            'articles', 'data', 'monthlyData', 'compareData',
            'raporChart', 'raporPerTahun', 'rktPerTahun',
            'insightRKT', 'insightRapor', 'insightMasalah', 'insightBiaya'
        ));
    }
}
