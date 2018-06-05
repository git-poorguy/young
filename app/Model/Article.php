<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getList(){
        return self::select('*')->where(['status'=>1])->get();
    }
}
