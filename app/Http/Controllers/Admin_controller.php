<?php


namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Admin_controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    /** to open profile page */
//    public function profile()
//    {
//        return view('dashboard.profile.index');
//    }


//    public function rules()
//    {
//        $userId = Auth::id();
//
//        return [
//            'username' => 'required|unique:users,username,'.$userId,
//            'email' => 'required|email|unique:users,email,'.$userId,
//            'password' => 'confirmed'
//        ];
//    }

    /** to action edit */
//    public function edit(Request $request)
//    {
//
////        User::update([
////            'name' => $request->name,
////            'email' => $request->email,
////            'phone' => $request->phone,
////            'address' => $request->address,
////        ]);
//
//
//        $request->validate([
//            'name' =>'required|min:4|string|max:255',
//            'email'=>'required|email|string|max:255'
//        ]);
//        $user =Auth::user();
//        $user->name = $request['name'];
//        $user->email = $request['email'];
//        $user->save();
//        return back()->with('message','Profile Updated');
////        return redirect(route('section.index'))->with(["edit" => ["Title", "body text"]]);
//    }


    public function profile(Request $request)
    {
        dd(Auth::user()->all());

        $user_findorfail = User::findOrFail(Auth::user()->id);

        $user_findorfail->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
                return view('dashboard.profile.index');

    }

}
