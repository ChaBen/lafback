<?php

namespace App\Http\Controllers;

use App\Press;
use Illuminate\Http\Request;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $press = Press::where('lang', request('lang'));
        $data = [
            'items' => $press->get(),
            'total' => $press->count()
        ];
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = request()->all();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Press::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Press $press)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        //
    }
}
