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
        return view('dashboard.admin.profile', compact('edit_admin'));
    }

    public function action_edit(Request $request, $id)
    {

        $user_findorfail = User::findOrFail($id);

        $user_findorfail->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return to_route('ecommerce.index');
    }

}
