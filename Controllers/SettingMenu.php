<?php

namespace App\Controllers;
use App\Models\Menu;
class SettingMenu extends BaseController
{
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
        return view('settings/menu/index', $data);
    }
}
