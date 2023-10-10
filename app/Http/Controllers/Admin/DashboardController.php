<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Inbox;
use App\Models\Residence;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $residences = Residence::all();
        $articles = Article::all();
        $inboxes = Inbox::all();
        $testimonials = Testimonial::all();

        return view('admin.index', compact('residences', 'articles', 'inboxes', 'testimonials'));
    }
}
