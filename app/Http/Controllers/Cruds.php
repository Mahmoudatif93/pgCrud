<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;

class Cruds extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::get();


    return view('crud.index',compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $request_data['name']=$request->name;
        $request_data['phone']=$request->phone;


      Crud::create($request_data);
      $request->session()->flash('message', 'Insert done !');
        return redirect('crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud= Crud::find($id);
        return view('crud.edit',compact('crud'));

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
        $crud= Crud::find($id);
        $crud->name=$request->name;
        $crud->phone=$request->phone;
            $crud->save();
            $request->session()->flash('message', 'row is Updated !');
            return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,request $request )
    {


    	Crud::where('id',$id)->delete();
        $request->session()->flash('message', 'row is deleted !');
        return redirect('crud');
    }
}
