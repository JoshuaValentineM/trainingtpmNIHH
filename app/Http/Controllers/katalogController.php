<?php

namespace App\Http\Controllers;

use App\Http\Requests\KatalogRequest;
use App\Models\katalog;
use Illuminate\Http\Request;

class katalogController extends Controller
{
    public function getKatalog(){
        return view('createkatalog');
    }

    public function createKatalog(KatalogRequest $request){

        katalog::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'jabatan' => $request->jabatan,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'nomorhp' => $request->nomorhp,
            'idline' => $request->idline,
        ]);

        return redirect(route('getKatalog'));
    }

    public function getKatalogs(){
        $katalog = katalog::all();
        return view('viewkatalog', ['katalog'=> $katalog]);
    }


    public function getKatalogById($id){
        $katalog = katalog::find($id);
        // dd($book);
        return view('updateKatalog', ['katalog' => $katalog]);
    }

    public function updateKatalog(KatalogRequest $request, $id){
        $katalog = katalog::find($id);

        // Cara pertama:
        // $book ->title = $request->title;
        // $book ->author = $request->author;
        // $book ->release = $request->release;
        // $book ->price = $request->price;

        // $book->save();

        // Cara kedua:
        $katalog -> update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'jabatan' => $request->jabatan,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'nomorhp' => $request->nomorhp,
            'idline' => $request->idline,
        ]);

        return redirect(route('getKatalogs'));

    }

    public function deleteKatalog($id){
        katalog::destroy($id);
        return redirect(route('getKatalogs'));
    }
}
