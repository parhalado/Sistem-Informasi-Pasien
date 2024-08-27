<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view ('pasien.index',compact(['patients']));
    }

    public function create()
    {
        return view ('pasien.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'rm' => 'max:8',
            'nama' => 'required',
            'tanggal' => 'required',
            'ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fotolain' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ktppj' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fotopj' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
          
        ]);

        Patient::create([
            'rm' => $request->rm,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'ktp' => $request->ktp,
            'kk' => $request->kk,
            'fotolain' => $request->fotolain,
            'ktppj' => $request->ktppj,
            'fotopj' => $request->fotopj,
        ]);

        $patients = Patient::create($request->all());
        if ($request->hasFile('ktp')) {
            $request->file('ktp')->move('images/', $request->file('ktp')->getClientOriginalName());
            $patients->ktp = $request->file('ktp')->getClientOriginalName();
            $patients->save();
        }
        if ($request->hasFile('kk')) {
            $request->file('kk')->move('images/', $request->file('kk')->getClientOriginalName());
            $patients->kk = $request->file('kk')->getClientOriginalName();
            $patients->save();
        }
        if ($request->hasFile('fotolain')) {
            $request->file('fotolain')->move('images/', $request->file('fotolain')->getClientOriginalName());
            $patients->fotolain = $request->file('fotolain')->getClientOriginalName();
            $patients->save();
        }
        if ($request->hasFile('ktppj')) {
            $request->file('ktppj')->move('images/', $request->file('ktppj')->getClientOriginalName());
            $patients->ktppj = $request->file('ktppj')->getClientOriginalName();
            $patients->save();
        }
        if ($request->hasFile('fotopj')) {
            $request->file('fotopj')->move('images/', $request->file('fotopj')->getClientOriginalName());
            $patients->fotopj = $request->file('fotopj')->getClientOriginalName();
            $patients->save();
        }
        return redirect('/pasien')->with('sukses', 'Data Berhasil Ditambahkan !');
        
    }
}