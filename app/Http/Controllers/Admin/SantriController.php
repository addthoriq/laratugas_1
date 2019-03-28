<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SantriModel;

class SantriController extends Controller
{
    protected $folder   = 'admin.santri';
    public function index()
    {
        $data['santri'] = SantriModel::orderBy('id')->paginate(2);
        return view($this->folder.'.index', $data);
    }
    public function create()
    {
        return view($this->folder.'.create');
    }
    public function store(Request $request)
    {
        // $santri     = new SantriModel;
        // $santri->nama   = $request->nama;
        // $santri->email   = $request->email;
        // $santri->gender   = $request->gender;
        // $santri->gender   = $request->gender;
        // $santri->password   = bcrypt($request->password);
        // $santri->save();

        SantriModel::create([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'gender'  => $request->gender,
            'password'  => $request->password,
        ]);

        return redirect('admin/santri')->with('success', 'data berhasil di input');
    }

    public function edit($id)
    {
        $santri         = SantriModel::find($id);
        return view($this->folder.'.edit', compact(['santri']));
    }

    public function update(Request $request)
    {
        $id         = $request->id;
        $santri     = SantriModel::find($id);
        $santri->nama   = $request->nama;
        $santri->email   = $request->email;
        $santri->gender   = $request->gender;
        $santri->gender   = $request->gender;
        $santri->password   = bcrypt($request->password);
        $santri->save();

        return redirect('admin/santri')->with('success', 'data berhasil di input');
    }
    public function delete($id)
    {
        $santri     = SantriModel::find($id)->delete();
        return redirect('admin/santri')->with('success', 'berhasil di hapus');
    }
}
