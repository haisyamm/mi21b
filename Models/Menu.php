<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
    protected $table      = 'menus';

    public function main_menu(){
        return $this->where('menu_level', 0)->where('is_active', 1)->orderBy('orderCol', 'ASC')->findAll();
    }

    public function sub_menu($parent_id){
        return $this->where('menu_level', 1)->where('parent_id', $parent_id)->findAll();
    }

    public function sub_sub_menu(){
        return $this->where('menu_level', 2)->findAll();
    }
}