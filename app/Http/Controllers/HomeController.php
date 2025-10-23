<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* Cara 1 */
        $data ['username']        = 'Raihan ';
        $data ['last_login']      = date('Y-m-d H:i:s');
        $data ['list_pendidikan'] = ['SD','SMP','SMA','S1','S2','S3'];
        return view('home', $data );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showSignup(){
        return view('simple-home');
    }
    public function signup(Request $request){
        $request->validate([
		    'name'  => 'required|max:10',
		    'email' => ['required','email'],
		    'password' => [
		        'required',           // Wajib diisi
		        'string',             // Harus berupa string
		        'min:8',              // Minimal 8 karakter
		        'regex:/[a-z]/',      // Harus mengandung setidaknya 1 huruf kecil
		        'regex:/[A-Z]/',      // Harus mengandung setidaknya 1 huruf besar
		        'regex:/[0-9]/',      // Harus mengandung setidaknya 1 angka
		    ],
		]);
        //dd($request->all());
        $data ['name']        = $request->name;
        $data ['email']           = $request->email;
        $data ['password']        = $request->password;
        return view('signup-succes', $data );
    }

            public function showlogin(){
        return view('login-form');
    }
        public function login(Request $request)
        {
            $request->validate([
                'username' => 'required|max:11',
                'password' => [
                    'required',
                    'min:3',              // Minimal 3 karakter
                    'regex:/[A-Z]/',      // Harus ada huruf besar
                ],
            ]);
            $nim = 'A2455301234';
            if ($request->username == $nim && $request->password == $nim) {
                // Jika berhasil
                return redirect()
                    ->route('home.login')
                    ->with('success', 'Login Berhasil! Selamat datang.');
            } else {
                // Jika gagal
                return redirect()
                    ->route('home.login')
                    ->with('error', 'Username atau Password salah!');
            }
        }
}


