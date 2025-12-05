<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Destination::get();
        return view('destination.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "category_name"=>"required | unique:category",
                "category_pic"=>"required"
            ]
        );
        //Img code

        $imgName="category_".time().".".$request->category_pic->extension();
        $request->category_pic->move(public_path('img'),$imgName);

         //insert code
        $category=new destination();
        $category->category_name=$request->category_name;
        $category->category_pic=asset('img')."/".$imgName;
        $category->save();

        return redirect("destination")->withSuccess("Insert successfully!!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
        return view("destination.edit",compact('destination')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
        $request->validate(
            [
                "category_name"=>"required",
                
            ]
        );
        //Img code
        $table=destination::find($destination->_id);
        if(isset($request->category_pic)){
            $imgName="category_".time().".".$request->category_pic->extension();
            $request->category_pic->move(public_path('img'),$imgName);
            $table->category_pic=asset('img')."/".$imgName;
        }
      

         //insert code
        $table->category_name=$request->category_name;
        
        $table->save();

        return redirect("destination")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
        $destination->delete();
        return redirect("destination")->withSuccess("Deleted successfully!!!");
    }
}
