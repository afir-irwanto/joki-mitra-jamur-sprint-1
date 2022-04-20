<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranWorkshop;
use Illuminate\Http\Request;
use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function admin_workshop()
    {
        $data = Workshop::all();
        return view('admin.workshop.index', compact('data'));
    }

    public function admin_workshop_create()
    {
        return view('admin.workshop.create');
    }

    public function admin_workshop_insert(Request $request)
    {
        $data = Workshop::create($request->all());
        if($request->hasFile('gambarWorkshop')){
            $request->file('gambarWorkshop')->move('foto-workshop/', $request->file('gambarWorkshop')->getClientOriginalName());
            $data->gambarWorkshop = $request->file('gambarWorkshop')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin_workshop');
    }

    public function admin_workshop_edit($id)
    {
        $data = Workshop::all()->where('id',$id)->first();

        return view('admin.workshop.edit', compact('data'));
    }

    public function admin_workshop_update(Request $request, $id)
    {
        $ambil = Workshop::findorfail($id);
        $gambar = $ambil->gambarWorkshop;

        $data = [
            'namaWorkshop' => $request->namaWorkshop,
            'hargaWorkshop' => $request->hargaWorkshop,
            'waktuWorkshop' => $request->waktuWorkshop,
            'deskripsiWorkshop' => $request->deskripsiWorkshop,
            'gambarWorkshop' => $gambar,
        ];
        $request->gambarWorkshop->move(public_path().'/foto-workshop',$gambar);
        $ambil->update($data);

        return redirect('admin/workshop');
    }

    public function admin_workshop_detail($id)
    {
        $data = Workshop::all()->where('id',$id)->first();

        return view('admin.workshop.detail', compact('data'));
    }

    public function user_workshop()
    {
        $data = Workshop::all();
        return view('user.workshop.index', compact('data'));
    }

    public function user_workshop_detail($id)
    {
        $data = Workshop::select('id','namaWorkshop','gambarWorkshop','waktuWorkshop','hargaWorkshop','deskripsiWorkshop')->where('id',$id)->first();
        return view('user.workshop.detail',compact('data'));
    }

    public function user_workshop_daftar(Request $request)
    {
        $data = PendaftaranWorkshop::insert([
            'tanggalPendaftaran' => $request->tanggalPendaftaran,
            'user_id' => $request->user_id,
            'workshop_id' => $request->workshop_id,
        ]);

        return redirect('/user/workshop');
    }
}
