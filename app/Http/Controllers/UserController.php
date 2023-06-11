<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller {

    public function __construct() {
		$this->authorizeResource(User::class, 'user');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $user = User::query();

        if(!empty($request->search)) {
			$user->where('id_user', 'like', '%' . $request->search . '%');
		}

        $user = $user->paginate(10);

        return view('users.index', [
            'users'=>$user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('users.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate([
            "nama_lengkap" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
            "foto"=>"mimes:png,jpg,jpeg",
            "role" => "required"
        ]);

        try {

            $fileName = null;

            if($request->hasFile('foto')){
                $file = $request->file('foto');
                $fileName = date('YmdHis').$file->getClientOriginalName();
                $file->move('uploads/',$fileName);
            }

            $user = new User();
            $user->nama_lengkap = $request->nama_lengkap;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->foto = $fileName;
            $user->role = $request->role;
            $user->save();

            return redirect()->route('user.index', [])->with('success', __('User created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('user.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,) {

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,) {

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,) {
        try {
            $validation = [
                "nama_lengkap" => "required",
                "username" => "required",
                "email" => "required",
                "role" => "required"
            ];

            if($request->hasFile('foto')){
                array_push($validation,["foto"=>"mimes:png,jpg,jpeg"]);
            }
            $request->validate([
                "nama_lengkap" => "required",
                "username" => "required",
                "email" => "required",
                "role" => "required"
            ]);

            $fileName = $user->foto;
            $newPassword = $user->password;

            if($request->hasFile('foto')){
                $file = $request->file('foto');
                $fileName = date('YmdHis').$file->getClientOriginalName();
                $file->move('uploads/',$fileName);
            }

            if($request->filled('password')){
                $newPassword = $request->password;
            }


            $user->id_user = $request->id_user;
            $user->nama_lengkap = $request->nama_lengkap;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $newPassword;
            $user->foto = $fileName;
            $user->role = $request->role;
            $user->save();

            return redirect()->route('user.index', [])->with('success', __('User edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('user.edit', compact('user'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,) {

        try {
            $user->delete();

            return redirect()->route('user.index', [])->with('success', __('User deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('user.index', [])->with('error', 'Cannot delete User: ' . $e->getMessage());
        }
    }


}
