<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('login-karyawan');
    }

    public function showLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|max:20',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/', // Harus ada huruf besar
            ],
        ]);

        // Jika login benar
        if ($request->username == 'Raihan Ahmada' && $request->password == 'Raihan123') {

            // ✅ Simpan username ke SESSION
            session([
                'username' => $request->username,
                'login_time' => Carbon::now()->toDateTimeString()
            ]);

            // Kirim data ke halaman pekerja
            $data['username'] = $request->username;
            $data['login_time'] = session('login_time');

            return view('halaman-pekerja', $data);
        } else {
            // Jika gagal login
            return redirect()
                ->route('home.Pegawai')
                ->with('error', 'Username atau Password salah!');
        }
    }

    public function showSignup()
    {
        return view('halaman-signup');
    }


    public function showPendaftar(Request $request)
    {
        // Validasi form input
        $request->validate([
            'nama'           => 'required|max:50',
            'alamat'         => 'required|max:300',
            'tanggal_lahir'  => 'required|date',
            'username'       => 'required|max:20',
            'password'       => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',   // huruf kecil
                'regex:/[A-Z]/',   // huruf besar
                'regex:/[0-9]/',   // angka
            ],
            'confirm_password' => 'required',
        ]);

        // Cek password dan konfirmasi
        if ($request->password !== $request->confirm_password) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Password dan konfirmasi password tidak sama!');
        }

        // Simpan username & nama ke session
        session([
            'username' => $request->username,
            'nama' => $request->nama,
        ]);

        // Siapkan data untuk dikirim ke view
        $data = [
            'username'   => $request->username,
            'nama'       => $request->nama,
            'alamat'     => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'login_time' => Carbon::now()->toDateTimeString(),
        ];

        // Arahkan ke halaman pekerja
        return view('halaman-pekerja', $data)
            ->with('success', 'Pendaftaran berhasil! Selamat datang, ' . $request->nama);
    }
}

