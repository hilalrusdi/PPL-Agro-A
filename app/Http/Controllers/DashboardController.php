<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'tittle' => 'Dashboard',
            'active' => 'dashboard',
            'image' => 'img/bonbon.jpg',
            'profile' => 'img/profile.png',
            'telepon' => '0894572384',
            'job' => 'Project Manajer',
            'nama' => 'Nabila',
            'email' => 'nabila@gmail.com'
        ]);
    }
}
