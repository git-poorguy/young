<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    public function getList($where){
        return self::select('id','name')->where($where)->get();
    }
}
