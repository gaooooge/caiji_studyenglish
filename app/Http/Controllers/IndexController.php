<?php
/**
 * Project Name: to_banna
 * File Name: GaoGe
 * Package Name: App\.Http.Controllers
 * Date: 2021/3/12 下午3:20
 * Copyright (c) 2021,All Rights Reserved.
 */
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function __construct()
    {

    }

    public function exercise()
    {
        $year = 5;
        $yun = 1000000;
        $bl = 0.2;
        for ($i = 1; $i <= $year; $i++){
            dd(123);
            $yun = $yun + ($yun*$bl);
            echo $yun.PHP_EOL;
        }
    }
}
