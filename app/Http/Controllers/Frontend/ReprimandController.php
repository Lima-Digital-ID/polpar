<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Officer;
use App\Models\Penalty;
use App\Models\Reprimand;
use App\Models\ReprimandsPenalty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReprimandController extends Controller
{
    public function index(Request $request)
    {
        $officer = Officer::get();
        $pasal = Penalty::get();
        return view('Frontend.Pages.Reprimand.index', compact('officer', 'pasal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'      => 'required',
            'name'      => 'required',
            'identity'      => 'required',
            'identityNumber'      => 'required',
            'phone'      => 'required',
            'officer'      => 'required',
            'signature'      => 'required',
            'identity_file'      => 'required',
        ], [
            'required' => ':attribute harus diisi.'
        ], [
            'photo' => 'Foto pelanggar',
            'name' => 'Nama pelanggar',
            'identity' => 'Identitas pelanggar',
            'identityNumber' => 'No identitas pelanggar',
            'identity_file' => 'Foto Identitas pelanggar',
            'phone' => 'No Whatsapp pelanggar',
            'officer' => 'Petugas',
            'signature' => 'Tanda Tangan Pelanggar',
        ]);
        try {
            DB::transaction(function () use ($request) {
                // $all = $request->all();
                // $ip = $request->ip();
                // $loc = \Location::get('118.99.121.88');
                // $data = array(
                //     'data' => $all,
                //     'ip' => $ip,
                //     'location' => $loc,
                // );
                $no = '';
                $noRep = Reprimand::orderBy('id','DESC')->first();;
                if ($noRep) {
                    $no = 'POLPAR/IV/2023/'.$noRep->id+1;
                } else {

                    $no = 'POLPAR/IV/2023/'.'1';
                }

                $document = $request->photo;
                $document->storeAs('public/pelanggar', $document->hashName());
                $documentIdentity = $request->identity_file;
                $documentIdentity->storeAs('public/identitas-pelanggar', $documentIdentity->hashName());
                $folderPath = public_path('storage/signature/');

                $image_parts = explode(";base64,", $request->signature);

                $image_type_aux = explode("image/", $image_parts[0]);

                $image_type = $image_type_aux[1];

                $image_base64 = base64_decode($image_parts[1]);

                $file = uniqid() . '.' . $image_type;
                file_put_contents($folderPath . $file, $image_base64);
                $model = new Reprimand();
                $model->image = $document->hashName();
                $model->image_identity = $documentIdentity->hashName();
                $model->name = $request->name;
                $model->identity = $request->identity;
                $model->identity_number = $request->identityNumber;
                $model->phone = $request->phone;
                $model->officer_id = $request->officer;
                $model->signature = $file;
                $model->number_reprimand = $no;
                $model->save();

                foreach ($request->penalty as $key => $value) {
                    $penalty = new ReprimandsPenalty();
                    $penalty->reprimands_id = $model->id;
                    $penalty->penalty_id = $value;
                    $penalty->save();
                }
            });
            $data = Reprimand::orderBy('id','DESC')->first();
            return redirect('reprimand/'.$data->id);
            // return redirect()->back()->with('message', 'Data Pelanggar berhasil ditambahkan.');
        } catch (\Exception $e) {
            return $e->getMessage();
            // return redirect()->back()->with('message', 'Terjadi kesalahan. : ' . $e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            // return redirect()->back()->with('message', 'Terjadi kesalahan pada database : ' . $e->getMessage());
            return $e->getMessage();
        }
    }

    public function show($id)
    {
        $data = Reprimand::find($id);
        $penaltyReprimand = ReprimandsPenalty::with('penalty')->where('reprimands_id', $id)->get();
        return view('Frontend.Pages.Reprimand.show', compact('data', 'penaltyReprimand'));
    }
}
