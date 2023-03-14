<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\Service;
use File;

class SpecialistController extends Controller
{
    public function index(){
        $specialists = Specialist::all();    // return all records from specialists table
        return view('pages.home', compact('specialists')); // send to view
    }

    public function addSpecialist(){
        $services = Service::all();
        return view('pages.add-specialist', compact('services')); // i specialisto forma 
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|unique:specialists',
            'specialization'=>'required',
            'city'=>'required',
            'photo'=>'mimes:jpeg,png,gif',  // reiskia, kad leis prideti failus tik nurodytu formatu
            'service'=>'required'
        ]);
    //  if(request()->hasFile('photo')){                            // metodas hasFile patikrina ar turi faila
            $path = $request->file('photo')->store('public/images'); // $path (failai) issaugomi serveryje, store saugo failus ir nurodom kur saugoti
            $fileName = str_replace('public/', '', $path);          // $fileName saugosim db, str_replace praso kad pasalintu is path'o public, replace'inam i tuscia stringa ir paduodam path'a
    //   }

        Specialist::create([             
            'name'=>request('name'),
            'specialization'=>request('specialization'),
            'city'=>request('city'),
            'serviceId'=>request('service'),
            'photo'=>$fileName    
        ]);
        return redirect('/');
    }

    public function showSpecialist(Specialist $specialist){     // labai svarbu metodui paduoti modeli(Specialist) per kuri perduodam id
        return view('pages.show-specialist',compact('specialist')); // grazina info tik apie konkretu meistra
    }

    public function editSpecialist(Specialist $specialist){
        return view('pages.edit-specialist',compact('specialist'));
    }

    public function storeUpdate(Specialist $specialist,Request $request){
        if(request()->hasFile('photo')){
            File::delete(storage_path('app/public/'.$specialist->photo));  // is pradziu pasalinam senesni faila
            $path = $request->file('photo')->store('public/images');
            $fileName = str_replace('public/', '', $path);
            Specialist::where('id', $specialist->id)->update(['photo'=>$fileName]);
        }
        Specialist::where('id', $specialist->id)->update(   // pirmiausia gaunam id ,o po to vykdom update metoda, kuriame request'iname
            $request->only(['name', 'specialization', 'city'])    // only viduje isvardijame, ka norime request'int
        );
        return redirect('/specialist/'.$specialist->id);
    }

    public function deleteSpecialist(Specialist $specialist){
        $specialist->delete();

        return redirect('/');  // po delete'inimo grazina i pradini puslapi
    }

    public function search(){
        return view('pages.search-form');
    }

    public function searchResults(){
        $results = Specialist::where('name','like','%'.request('search').'%')->get();
        return view('pages.search', compact('results'));
    }
}
