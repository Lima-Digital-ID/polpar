<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentDetail;
use App\Models\Officer;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    public function index()
    {
        $cek = Assignment::orderBy('id', 'DESC')->first();
        $no = '';
        if ($cek) {
            $no = $cek->id + 1;
        } else {
            $no = 1;
        }
        $year = date('Y');
        $month = date('n');
        $no_surat = 'Sprin/' . $no . '/' . Helper::getRomawi($month) . '/HUK.6.6/' . $year . '';
        $officers = Officer::get();
        return view('Frontend.Pages.Assignment.index', compact('no_surat', 'officers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_surat'      => 'required',
            'date'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
        ], [
            'required' => ':attribute harus diisi.'
        ], [
            'no_surat' => 'No Surat',
            'date' => 'Tanggal Surat Dibuat',
            'date_start' => 'Tanggal Mulai Patroli',
            'date_end' => 'Tanggal Selesai Patroli',
        ]);
        try {
            DB::transaction(function () use ($request) {
                $model = new Assignment();
                $model->no_surat = $request->no_surat;
                $model->date_create = $request->date;
                $model->date_start = $request->date_start;
                $model->date_end = $request->date_end;
                $model->note = $request->keterangan;
                $model->url = md5($request->no_surat);
                $model->save();

                foreach ($request->officer as $key => $value) {
                    $detail = new AssignmentDetail();
                    $detail->assignment_id = $model->id;
                    $detail->officer_id = $value;
                    $detail->save();
                }
            });
            $data = Assignment::orderBy('id', 'DESC')->first();
            return redirect('assignment/' . $data->url);
            // return redirect()->back()->with('message', 'Data Pelanggar berhasil ditambahkan.');
        } catch (\Exception $e) {
            return $e->getMessage();
            // return redirect()->back()->with('message', 'Terjadi kesalahan. : ' . $e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            // return redirect()->back()->with('message', 'Terjadi kesalahan pada database : ' . $e->getMessage());
            return $e->getMessage();
        }
    }

    public function show($code)
    {
        $data = Assignment::where('url', $code)->first();
        $detail = AssignmentDetail::with('officer')->where('assignment_id', $data->id)->get();
        return view('Frontend.Pages.Assignment.show', compact('data', 'detail'));
    }
}
