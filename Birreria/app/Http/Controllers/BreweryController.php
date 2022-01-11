<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beers = Beer::all();
        return view('brewery.create', compact('beers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $brewery = Auth::user()->breweries()->create([
           'name'=>$request->name,
           'description'=>$request->description,
           'img'=>$request->file('img')->store('public/img')
        ]);
        $brewery->beers()->attach($request->beer);

        return redirect(route('homepage'))->with('status' ,'Birreria inserita');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function show(brewery $brewery)
    {
        return view('brewery.show' , compact('brewery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function edit(brewery $brewery)
    {
        // $beers = Beer::all();
        return view('brewery.edit', compact('brewery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, brewery $brewery)
    {
        $brewery = Auth::user()->breweries()->update([
         'name'=>$request->name,
         'description'=>$request->description,
         'img'=>$request->file('img')->store('public/img'),
         
      ]);
 
      return redirect(route('homepage', compact('brewery')))->with('status', 'Modifica effettuata');
      
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brewery  $brewery
     * @return \Illuminate\Http\Response
     */
    public function destroy(brewery $brewery)
    {
        $brewery -> delete();

        return redirect(route('homepage'))->with('destroy', 'Birreria eliminata');
    }
}
 