<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Session;

class PrintTemuanController extends Controller
{
    public function index()
    {
        //
    }

    public function catchData(Request $request)
    {
        $dataTemuanCatch = $request->all();
        session(['sessionTemuan' => $dataTemuanCatch]);

        return response()->json([
            'result' => $request->session->get('sessionTemuan')
        ], 200);
        
    }

    public function printData(Request $request)
    {
        $printCoy = $request->dataPrint;

        $pdf = PDF::loadview('printtest',['temuan' => $printCoy]);
        return $pdf->download($printCoy['noLHA'].'.pdf');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
