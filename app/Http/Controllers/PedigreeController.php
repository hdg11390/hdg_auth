<?php

namespace App\Http\Controllers;
use App\Models\Femalepedigree;
use App\Models\Malepedigree;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PedigreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $malepedigrees = Malepedigree::findOrFail(40);
        $femalepedigrees = Femalepedigree::findOrFail(36);

        return view('admin.pedigree.index', compact('malepedigrees', 'femalepedigrees'));

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
     ;
        return view('admin.pedigree.create', compact('selectedID','mitems', 'felectedID','fitems'));

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

    public function fmped_id(Request $request){
    $items = Femalepedigree::pluck('callName', 'id');
    $selectedID = 2;
    return view('admin.pedigree.create', compact('id', 'items'));
    }

    public function mped_id(Request $request){
        $mitems = Malepedigree::pluck('callName', 'id');
        $selectedID = 2;
        return view('admin.pedigree.create', compact('id', 'mitems'));
        }
}
