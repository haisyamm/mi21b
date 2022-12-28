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
        $main = $this->menuModel->main_menu();
        $menus = [];
        foreach ($main as $key => $val) {
            $menus[$key]=$main[$key];
            $menus[$key]['sub'] = $this->menuModel->sub_menu($val['id']);
        }
        $data['menus'] = $menus;
        $data['main'] = $main;
        return view('dashboard_user', $data);
    }

    public function user()
    {
        return view('dashboard_user');
    }
}
