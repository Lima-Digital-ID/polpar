<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reprimand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReprimandController extends Controller
{
    public function index(Request $request)
    {
        return view('Frontend.Pages.Reprimand.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'      => 'required',
            'name'      => 'required',
            'identity'      => 'required',
            'identityNumber'      => 'required',
            'phone'      => 'required',
            'officer'      => 'nullable',
            'signature'      => 'required',
        ], [
            'required' => ':attribute harus diisi.'
        ], [
            'photo' => 'Foto pelanggar',
            'name' => 'Nama pelanggar',
            'identity' => 'Identitas pelanggar',
            'identityNumber' => 'No identitas pelanggar',
            'phone' => 'No Whatsapp pelanggar',
            'officer' => 'Petugas',
            'signature' => 'Tanda Tangan Pelanggar',
        ]);
        try {
            DB::transaction(function () use ($request) {
                $all = $request->all();
                $ip = $request->ip();
                $loc = \Location::get('118.99.121.88');
                $data = array(
                    'data' => $all,
                    'ip' => $ip,
                    'location' => $loc,
                );
                $folderPath = public_path('storage/signature/');

                $image_parts = explode(";base64,", $request->signature);

                $image_type_aux = explode("image/", $image_parts[0]);

                $image_type = $image_type_aux[1];

                $image_base64 = base64_decode($image_parts[1]);

                $file = uniqid() . '.' . $image_type;
                file_put_contents($folderPath . $file, $image_base64);
                $model = new Reprimand();
                $model->image = '$request->image';
                $model->name = $request->name;
                $model->identity = $request->identity;
                $model->identity_number = $request->identityNumber;
                $model->phone = $request->phone;
                $model->signature = $file;
                $model->save();
            });
            return redirect()->back()->with('message', 'Banner berhasil ditambahkan.');
        } catch (\Exception $e) {
            return $e->getMessage();
            // return redirect()->back()->with('message', 'Terjadi kesalahan. : ' . $e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            // return redirect()->back()->with('message', 'Terjadi kesalahan pada database : ' . $e->getMessage());
            return $e->getMessage();
        }
    }
}
