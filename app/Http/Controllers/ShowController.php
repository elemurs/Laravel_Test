<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        
        return view('index',[
            'shows' => $shows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show = $request;
        
        if(Show::where('apiId','=',$show['id'])->first())
        {
            return back()->with('issue', 'Este show ya esta en la base de datos! No se puede ingresar.');
        }
        
        
        Show::create([
            'apiId'         =>  $show['id'],
            'name'          =>  $show['name'],
            'url'           =>  $show['url'],
            'type'          =>  $show['type'],
            'language'      =>  $show['language'],
            'status'        =>  $show['status'],
            'runtime'       =>  $show['runtime'], 
            'weight'        =>  $show['weight'], 
            'premiered'     =>  $show['premiered'],
            'ended'         =>  $show['ended'],
            'officialSite'  =>  $show['officialSite'],
            'averageRate'   =>  $show['rating']['average'],
            'summary'       =>  $show['summary'],
            'img'           =>  $show['image']['original'],
        ]);

        return back()->with('status', 'Creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function show(Show $show)
    {
        return view('show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        return view('edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Show $show)
    {
        $show->update([
            'name' => $request->name,
            'country' => $request->country,
            'phone' => $request->phone,
            'address' => $request->address,
            'type_consumer' => $request->type_consumer,
        ]);

        $show->update([
            'name'          =>  $request->name,
            'url'           =>  $request->url,
            'type'          =>  $request->type,
            'language'      =>  $request->language,
            'status'        =>  $request->status,
            'runtime'       =>  $request->runtime, 
            'weight'        =>  $request->weight, 
            'premiered'     =>  $request->premiered,
            'ended'         =>  $request->ended,
            'officialSite'  =>  $request->officialSite,
            'averageRate'   =>  $request->averageRate,
            'summary'       =>  $request->summary,
            'img'           =>  $request->img,
        ]);

        return back()->with('status', 'Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy(Show $show)
    {
        $show->delete();
        return back()->with('status', 'Eliminado con éxito');;
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $response = Http::get('https://api.tvmaze.com/search/shows?q='.$search);
        $shows = $response->json();

        return view('search', compact('shows'));
    }
}
