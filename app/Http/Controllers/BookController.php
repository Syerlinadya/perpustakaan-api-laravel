<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\bukuModel;

class BookController extends Controller
{
    public function book(){
        $data = "Data All Book";
        return response()->json($data, 200);
    }

    public function bookAuth(){
        $data = "Welcome ".Auth::user()->name;
        return response()->json($data, 200);
    }

    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'nama_buku'=>'required',
            'pengarang'=>'required',
            'deskripsi'=>'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $save = bukuModel::create([
            'nama_buku' =>$req->nama_buku,
            'pengarang' =>$req->pengarang,
            'deskripsi' =>$req->deskripsi,
        ]);
        if($save){
            return Response()->json(['status'=>1]);
        } else {
            return Response()->json(['status'=>0]);
        }
    }

    public function update(Request $req, $id){
        $validator = Validator::make($req->all(), [
            'nama_buku' => 'required',
            'pengarang' => 'required',
            'deskripsi' => 'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors());
        }
        $ubah = bukuModel::where('id', $id)->update([
            'nama_buku' => $req->nama_buku,
            'pengarang' =>$req->pengarang,
            'deskripsi'=>$req->deskripsi
        ]);
        if($ubah){
            return Response()->json(['status' =>1]);
        } else{
            return Response()->json(['status' => 0]);
        }
    }
}
