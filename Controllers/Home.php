<?php

namespace App\Controllers;
use App\Models\Menu;
// use App\Models\User;
class Home extends BaseController
{
    protected $menuModel;
    protected $userModel;
    public function __construct()
    {
        $this->menuModel = new Menu();
    }

    public function index()
    {
        return view('dashboard');
    }

    public function user()
    {
        return view('dashboard_user');
    }
}
