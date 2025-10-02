<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $employee_name  = 'Raihan Ganteng';
        $birth_date     = Carbon::create(2002, 5, 10);
        $position       = 'Software Engineer';
        $skills         = ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'MySQL'];
        $join_date      = Carbon::create(2023, 1, 15);
        $salary         = 7000000;
        $age = $birth_date->age;
        $working_duration = round($join_date->diffInDays(Carbon::now()));
        if ($working_duration < 730) {
            $status_info = "Masih pegawai baru, tingkatkan pengalaman kerja!";
        } else {
            $status_info = "Sudah senior, jadilah teladan bagi rekan kerja!";
        }
        $career_goal = "Menjadi CTO di perusahaan teknologi besar";
        $data = [
            'employee_name'     => $employee_name,
            'age'               => $age,
            'position'          => $position,
            'skills'            => $skills,
            'join_date'         => $join_date->toDateString(),
            'working_duration'  => $working_duration,
            'salary'            => $salary,
            'status_info'       => $status_info,
            'career_goal'       => $career_goal,
        ];
        return view('halaman-pegawai', $data);
    }
}
