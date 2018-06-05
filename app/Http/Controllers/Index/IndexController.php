<?php

namespace App\Http\Controllers\Index;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Nav;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        $model = new Nav();
        $parent_list =$model->getList(['parent_id'=>0]);
        foreach ($parent_list as $key => $value) {
            $nav_list[$key] = $value;
            $nav_list[$key]['list'] = $model->getList(['parent_id'=>$value['id']]);
        }
//        $Article = new Article();
//        $articleList=$Article->getList();
        $articleList = DB::table('articles')->simplePaginate(1);
        $aboutsRow = DB::table('abouts')->first();
        $articlesRow = DB::table('articles')->get();
        return view('index.index', ['nav_list' => $nav_list,'article_list'=>$articleList,'about'=>$aboutsRow,'article_new'=>$articlesRow]);
    }
}
