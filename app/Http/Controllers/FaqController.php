<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Section;
use App\Solution;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs = Faq::all();
        return view('administration.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sections = Section::all();
        $solutions = Solution::all();
        return view('administration.faq.create', compact('sections', 'solutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'faq' => 'required'
        ]);

        Faq::create($request->all());
        return redirect()->route('faqs.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
        $sections = Section::all();
        $solutions = Solution::all();
        return view('administration.faq.edit', compact('faq', 'sections', 'solutions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
        $this->validate($request, [
            'faq' => 'required'
        ]);
        
        $faq = Faq::findOrFail($faq->id);
        $faq->update($request->all());

        //Redireccionamos
        return redirect()->route('faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
        Faq::findOrFail($faq->id)->delete();

        return redirect()->route('faqs.index');
    }
}
