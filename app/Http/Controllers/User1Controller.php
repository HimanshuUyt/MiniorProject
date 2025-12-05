<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Package;
use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    //
    public function index() 
    {
        return view('register');
    }

    public function index1() 
    {
        return view('login');
    }

    public function register(Request $request)
    {

        $request->validate([
            "fullname"=> "required",
            "username"=> "required | unique:user",
            "password"=>"required | min:8 | max:12",
            "con_password"=>"required | same:password",
            "email"=>"required | email",
            "mobileno"=>"required |numeric | digits:10",
            "address"=>"required"
        ]);

        $table = new User1();
        $table->fullname = $request->fullname;
        $table->email = $request->email;
        $table->username = $request->username;
        $table->mobileno = $request->mobileno;
        $table->address = $request->address;
        $table->password = md5($request->password);
        $table->save();


        return redirect('login')->withSuccess("Registered Success");
    }

   

    public function home()  {
        $destination=Destination::get(); //select * from table;
        $package = Package::get(); //select * from table;
        return view('home',compact('destination','package'));
    }

    public function getalluser()  {
        $data=User1::get();
        return view('adminuser',compact('data'));  
    }
    
    public function detail($id)  {
        $package = Package::where('_id',$id)->first();
        return view('packagedetails',compact('package'));
        
    }

    public function about()  {
        return view('about');  
    }

    public function blog()  {
        return view('blog');  
    }

    public function contact()  {
        return view('contact');  
    }

    public function guide()  {
        return view('guide');  
    }


    public function services()  {
        return view('services');  
    }

    public function single()  {
        return view('single');  
    }

    public function testimonial()  {
        return view('testimonial');  
    }

    public function login(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        $data=User1::where("email",$request->email)->where("password",md5($request->password))->first();

        if(strcasecmp($request->email,"admin")==0 && strcasecmp($request->password,"admin")==0){
            return redirect('admin');
        }
        else if($data!=null){
            session()->put("user",$data);
            return redirect('/');
        }else{
            return back()->withSuccess("Invalid Username/Password");
        }
    }

    public function search(Request $request) {
        // $cats=Category::get();
        $package=Package::where('package_name','LIKE','%'.$request->search."%")->get();
        return view('package',compact('package'));
        
    }

    public function PackageByCat($id) {
        // $cats=Category::get();
        $package=Package::where('destination',$id)->get();
        return view('package',compact('package'));
        
    }

    public function allpackage(){
        // $cats=Category::get();
        $package=Package::get();
        return view('package',compact('package'));
        
    }

    public function alldestination(){
        // $cats=Category::get();
        $destination=destination::get();
        return view('destination',compact('destination'));
        
    }

    

    public function admin()  {
        $c_count=Destination::count();
        $p_count=Package::count();
        $o_count=Cart::where('status',1)->count();
        $u_count=User1::count();
        // $u_count=User1::count();
        $r=Cart::where('status',1)->sum('total');
        $orders=Cart::where('status',1)->latest()->get();
        return view('adminhome',compact('c_count','p_count','o_count','u_count','r','orders'));        
    }

    //profile update
    public function profileupdate(Request $request) {

        $request->validate([
            "fullname"=> "required",
            "username"=> "required | unique:user",
            "password"=>"required | min:8 | max:12",
            "email"=>"required | email",
            "mobileno"=>"required |numeric | digits:10",
            "address"=>"required"
        ]);
        
        // $cats=Category::get();
        $user=session()->get('user');
        $table=User1::where('_id',$user->id)->first();

        $table->fullname = $request->fullname;
        $table->email = $request->email;
        $table->username = $request->username;
        $table->mobileno = $request->mobileno;
        $table->address = $request->address;
        $table->password = md5($request->password);

        $table->save();


        session()->put('user',$table);
        return redirect("/");
        
    }
}