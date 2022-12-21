<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
    protected $table      = 'menus';

    public function main_menu(){
        return $this->where('menu_level', 0)->findAll();
    }

    public function sub_menu($id){
        return $this->where('menu_level', 1)->where('parent_id', $id)->findAll();
    }

    public function sub_sub_menu(){
        return $this->where('menu_level', 2)->findAll();
    }
    
}