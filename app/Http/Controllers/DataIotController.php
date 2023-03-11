<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Exports\SensorExport;
use Maatwebsite\Excel\Facades\Excel;


class DataIotController extends Controller
{
    public function dashboard(Request $request)
    {
        $sensor = Sensor::orderby('created_at', 'desc')->first();
        return view('admin.dashboard', compact('sensor'));
    }

    public function ajaxSensor()
    {
        $data = Sensor::orderby('created_at', 'desc')->take(10)->get()->reverse()->values();
        return response()->json($data);
    }

    public function datasensor(Request $request)
    {

        $sensor = new Sensor();
        $sensor->suhu = $request->get('suhu');
        $sensor->cahaya = $request->get('cahaya');
        $sensor->created_at = Carbon::now('Asia/Jakarta');
        $sensor->updated_at = Carbon::now('Asia/Jakarta');
        $sensor->save();
        return response($sensor);
    }

    public function tableSensor(Request $request)
    {
        if ($request->get('tanggal')) {
            $tanggal = $request->get('tanggal');
            $data = Sensor::whereDate('created_at', $tanggal)->get();
        } else {
            $data = Sensor::all();
        }
        return view('admin.tabel', compact('data'));
    }

    public function grafikSensor(Request $request)
    {
        if ($request->get('tanggal')) {
            $tanggal = $request->get('tanggal');
            $data = Sensor::whereDate('created_at', $tanggal)->get();
        } else {
            $data = Sensor::all();
        }
        return view('admin.grafik', compact('data'));
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

    //exportSensor
    public function exportSensor(Request $request)
    {
        return Excel::download(new SensorExport, 'sensor.xlsx');
    }
}
