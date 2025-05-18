<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonial', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'message' => 'required|string|max:500',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        return redirect()->route('testimonial')->with('success', 'Thanks for your Testimony!');
    }
}