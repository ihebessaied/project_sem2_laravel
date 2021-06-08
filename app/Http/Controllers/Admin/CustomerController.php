<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = DB::table('users')->where('admin', '=', 0)->Paginate(10);
        return view('Admin.customer.index',[
            'customer'=>$customer
        ]);
    }

    // function fetch(Request $request)
    // {
        
    //  if($request->ajax())
    //  {
    //   $data = DB::table('user')->simplePaginate(5);
    //      return view('rentchild',compact('data'))->render();
    //  }
    // }

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
        //
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        $customer =User::create($validatedData);
        
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view ('Admin.customer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //bb l model mahebch yet3aa  !!!!!!!!!!!!!!!!!!!!!!!
        $userFind = DB::table('users')->where('id','=',$user)->first();
        $message = "";
        return view ('Admin.customer.edit',['data' => $userFind,'messageup'=>$message]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
         $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        
        $update = DB::table('users') ->where('id', $user) ->limit(1) ->update( [ 'name' => $validatedData['name'], 'email' => $validatedData['email']]);
        // $user->update($validatedData);  
        $userFind = DB::table('users')->where('id','=',$user)->first();
        $message = "Customer is update ";
        return view ('Admin.customer.edit',
        [
            'data' => $userFind,
            'messageup'=>$message
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        $delete = User::where('id', $user)->delete();
        // $user->delete();//ttmchich 5ater fi kol mara najem nab3th id ou manejmch nab3thou fi route kk prof !!!!!!
        return redirect()->route('customers.index');
    }
}
