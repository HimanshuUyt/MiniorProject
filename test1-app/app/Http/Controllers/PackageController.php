<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Package::get();
        return view('package.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorys=Destination::get();
        return view('package.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        //Img code

        $imgName="package_".time().".".$request->package_pic->extension();
        $request->package_pic->move(public_path('img'),$imgName);
        $imgpath="/img/".$imgName;

        // insert code
        $table=new Package();
        $table->package_name = $request->package_name;
        $table->package_desc = $request->package_desc;
        $table->package_price = $request->package_price;
        $table->package_discount = $request->package_discount;
        $table->destination = $request->destination;
        $table->package_pic=$imgpath;
        $table->day_night = $request->day_night;
        $table->route = $request->route;
        $table->detail_desc = $request->detail_desc;
        $table->save();

        return redirect("package")->withSuccess("Inserted Successfully!!!");

    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
        $categorys=Destination::get();
        return view('package.edit',compact('package','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $table = Package::find($package->_id);

        if(isset($request->package_pic)){
            //Img code
            $imgName="package_".time().".".$request->package_pic->extension();
            $request->package_pic->move(public_path('img'),$imgName);
            $imgpath="/img/".$imgName;
            $table->package_pic=$imgpath;
        }
        
        // update code
        
        $table->package_name = $request->package_name;
        $table->package_desc = $request->package_desc;
        $table->package_price = $request->package_price;
        $table->package_discount = $request->package_discount;
        $table->destination = $request->destination;
        $table->day_night = $request->day_night;
        $table->route = $request->route;
        $table->detail_desc = $request->detail_desc;
        $table->save();

        return redirect("package")->withSuccess("Update Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect('package')->withSuccess("Deleted Successfully !!!");
    }
}
