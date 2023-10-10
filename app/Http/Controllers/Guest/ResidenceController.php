<?php

namespace App\Http\Controllers\Guest;

use App\Models\Type;
use App\Models\Residence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResidenceController extends Controller
{
    public function residence()
    {
        $residences = Residence::latest()->with('types')->get();

        return view('pages.residence', compact('residences'));
    }

    public function detail(Residence $residence)
    {
        $message = 'Halo, saya tertarik untuk membeli rumah di perumahan '.$residence->residence_name.'. bisa bantu saya untuk mengetahaui informasi lebih detailnya?';
        return view('pages.residenceDetail', compact('residence', 'message'));
    }
}
