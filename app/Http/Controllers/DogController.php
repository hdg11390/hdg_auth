<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use App\Models\Femalepedigree;
use App\Models\Malepedigree;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dogs = Dog::select("*")
        ->orderBy("birthday", "desc")
        ->get();


        // $mped_id = $dogs->mped_id;
        // $mitem = Malepedigree::findOrFail($mped_id);
      return view('admin.dogs.index', compact('dogs'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mitems = Malepedigree::pluck('callName', 'id');
        $selectedID = 2;
        $fitems = Femalepedigree::pluck('callName', 'id');
          $felectedID = 2;
   
     return view('admin.dogs.create', compact('selectedID','mitems', 'felectedID','fitems'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Dog::create($request->all());

        return redirect('admin/dogs/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dogs = Dog::findOrFail($id);

         $mitems = Malepedigree::pluck('callName', 'id');
         $selectedID = 2;
         $fitems = Femalepedigree::pluck('callName', 'id');
         $felectedID = 2;

    
         return view('admin.dogs.edit', compact('dogs','selectedID','mitems', 'felectedID','fitems'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        
        dd($input);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
