<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cms.user_management.index');
    }
    public function datatable()
    {
        $roles = User::whereHas('roles', function ($query) {
            $query  ;
        })
            ->with('roles')
            ->where('user_type', '!=', 0)->latest()
            ->get();

        $roles = $roles->transform(function ($item) {
            $item->role_names = $item->roles->pluck('name')->implode(', ');
            return $item;
        })->all();

        return DataTables::collection($roles)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'isEdit' => false,
            'user' => User::where('user_type', '!=', 0)->get(),
            'roles' => Role::where('name', '!=', 'super-admin')->get(),
        ];

        return view('cms.user_management.add-user', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required|min:8',
            'role_name' => 'required'
        ]);

        $user['name'] = $request->name;
        if ($request->password) {
            $user['password'] = Hash::make($request->password);
        }
        $user['email'] = $request->email;
        $user['user_type'] = 1;
        $user = User::updateOrCreate(['id' => $request->id], $user);
        $user->syncRoles($request->role_name);

        return redirect()->intended('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'isEdit' => true,
            'user' => $user,
            'roles' => Role::where('name', '!=', 'super-admin')->get(),
            'userRole' => $user->getRoleNames()->toArray(),
        ];
        return view('cms.user_management.add-user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->email = $request->email;
        $user->save();
        $user->syncRoles($request->role_name);

        return redirect()->intended('users');
    }

    public function status(Request $request)
    {
        $status = $request->status;
        $id = $request->id;

        $item = User::find($id);
        if ($item->update(['status' => $status])) {

            $response['status'] = true;
            $response['message'] = 'User status updated successfully.';
            return response()->json($response, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::where('id', $request->deleteId)->first();
        $user->syncRoles([]);
        $user->delete();
        return response()->json($user, 200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
