<?php

namespace App\Http\Controllers\Backoffice;

class DashboardController extends BackOfficeController
{
    public function index()
    {
        return view('backoffice.dashboard.index');
    }
}
