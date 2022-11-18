<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use Carbon\Carbon;


class DataIotController extends Controller
{
    public function dashboard(Request $request)
    {

        if($request->ajax()){

            return $data = Sensor::orderby('created_at','desc')->take(10)->get()->reverse()->values(); 
               
        }
        // dd($data);
        return view('admin.dashboard');
    }
    public function datasensor(Request $request)
    {
        
        $animal=new Sensor();
        $animal->suhu = $request->get('suhu');
        $animal->cahaya = $request->get('cahaya');
        $animal->created_at = Carbon::now('Asia/Jakarta');
        $animal->updated_at = Carbon::now('Asia/Jakarta');
        $animal->save();
                return response($animal);
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
