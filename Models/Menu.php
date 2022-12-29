<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
    protected $table      = 'menus';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['menu_id', 'title', 'icon', 'link', 'parent_id', 'menu_level', 'is_active'];

    
    public function main_aktif(){
        return $this->where('menu_level', 0)->where('is_active', 1)->findAll();
    } 

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