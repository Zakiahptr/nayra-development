<?php

namespace App\Http\Controllers\Guest;

use App\Models\Article;
use App\Models\Residence;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class HomeController extends Controller
{
    public function home()
    {
        $residences = Residence::latest()->get();
        $articles = Article::latest()->get();
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('home', compact('residences', 'articles', 'services', 'testimonials'));
    }
}
