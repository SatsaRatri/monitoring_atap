<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensor;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    public function analisis(Request $request)
    {
        $mttr = 0;
        $mtbf = 0;
        if (isset($request->tgl_awal) && isset($request->tgl_akhir)) {
            $awalTgl = $request->tgl_awal . ' 00:00:00';
            $akhirTgl = $request->tgl_akhir . ' 23:59:59';
            // dd($awalTgl, $akhirTgl);
            $sensor = Sensor::where(function ($query) {
                $query->where('cahaya', '<=', 0)
                    ->orWhere('suhu', '<=', 0);
            })->where('created_at', '>=', $awalTgl)->where('created_at', '<=', $akhirTgl)->get();
            // dd($sensor->count());
            if ($sensor->count() > 0) {
                $hariGagal = 0;
                $menitGagal = 0;
                $tanggal = [];
                foreach ($sensor as $s) {
                    if (in_array($s->created_at->format('Y-m-d'), $tanggal)) {
                        $menitGagal += 1;
                    } else {
                        $menitGagal += 1;
                        $hariGagal += 1;
                        array_push($tanggal, $s->created_at->format('Y-m-d'));
                    }
                }
                $menit = 360;
                $awalTgl = Carbon::parse($awalTgl);
                $akhirTgl = Carbon::parse($akhirTgl);
                $totalHari = $awalTgl->diffInDays($akhirTgl) + 1;
                $totalJam = $totalHari * $menit;
                $mttr = $menitGagal / $hariGagal;
                $mtbf = $totalJam / $menitGagal;
            }
        }
        return view('admin.analisis', compact('mttr', 'mtbf'));
    }
    //testing
    public function testing()
    {        //mttr 7 hari suhu dan cahaya code
        $awalTgl = '2022-11-01' . '00:00:00';
        $akhirTgl = '2022-11-07 ' . '23:59:59';
        $sensor = Sensor::where(function ($query) {
            $query->where('cahaya', '<=', 0)
                ->orWhere('suhu', '<=', 0);
        })->where('created_at', '>=', $awalTgl)->where('created_at', '<=', $akhirTgl)->get();
        // dd($sensor->count());
        $hariGagal = 0;
        $menitGagal = 0;
        $tanggal = [];
        foreach ($sensor as $s) {
            if (in_array($s->created_at->format('Y-m-d'), $tanggal)) {
                $menitGagal += 1;
            } else {
                $menitGagal += 1;
                $hariGagal += 1;
                array_push($tanggal, $s->created_at->format('Y-m-d'));
            }
        }

        $menit = 360;
        $awalTgl = \Carbon\Carbon::parse($awalTgl);
        $totalHari = $awalTgl->diffInDays($akhirTgl) + 1;
        $totalJam = $totalHari * $menit;

        // dd($menitGagal, $hariGagal);
        //map

        return response()->json([
            // 'sensor' => $sensor,
            'menitGagal' => $menitGagal,
            'hariGagal' => $hariGagal,
            'mttr' => $menitGagal / $hariGagal,
            'mtbf' => $totalJam / $menitGagal,
        ]);
    }
}
