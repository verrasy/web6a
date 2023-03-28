<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | Web 6A',
            'page' => 'dashboard',
            'myname' => 'Verra SY',
        ];

        return view('dashboard', $data);
    }

    public function employees()
    {
        $data = [
            'title' => 'Employees | Web 6A',
            'page' => 'employees',
            'myname' => 'Verra SY',
        ];

        return view('employees', $data);
    }
}
