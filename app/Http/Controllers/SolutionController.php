<?php

namespace App\Http\Controllers;

use App\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $solutions = Solution::all();
        return view('administration.solution.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.solution.create');
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
            'information' => 'required'
        ]);

        Solution::create($request->all());
        return redirect()->route('solutions.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
        return view('administration.solution.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
        $this->validate($request, [
            'information' => 'required'
        ]);
        
        $solution = Solution::findOrFail($solution->id);
        $solution->update($request->all());

        //Redireccionamos
        return redirect()->route('solutions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
        Solution::findOrFail($solution->id)->delete();

        return redirect()->route('solutions.index');
    }
}
