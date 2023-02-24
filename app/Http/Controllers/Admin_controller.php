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


    /** to open home page dashboard for admin */
    public function index_admin()
    {
        return view('dashboard.index');
    }

    /** to open edit page */
    public function profile($id)
    {
        $edit_admin = User::findOrFail($id);
        return view('dashboard.profile.index', compact('edit_admin'));
    }

    /** to action edit */
    public function action_edit(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        return to_route('ecommerce.index');
    }

    /** to open setting ecommerce page */
    public  function setting(){
        return view('dashboard/setting.index');
    }
}
