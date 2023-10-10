<?php

namespace App\Http\Controllers\Guest;

use App\Models\Service;
use App\Models\Workflow;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class AboutController extends Controller
{
    public function about()
    {
        $services = Service::all();
        $workflows = Workflow::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::all();
        return view('pages.about-us', compact( 'services', 'workflows','testimonials', 'galleries'));
    }
}
