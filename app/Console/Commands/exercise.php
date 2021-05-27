<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class exercise extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:exercise';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '练习';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $arr = $this->getArr();

//        $sortArr = $this->bubbling($arr);
        $sortArr = $this->insertSort($arr);
        dd($sortArr);
    }

    private function getArr($length = 100)
    {
        $arr = [];
        while(count($arr) < $length){
            $arr[] = rand(0, $length*2);
            $arr = array_values(array_flip(array_flip($arr)));
        }

        return $arr;
    }

    /**
     * 冒泡 对比交换
     * @func
     * @Author: GG
     * @CreateDate: 2021/5/19 下午1:57
     * @param array $arr
     * @return array
     */
    private function bubbling(array $arr):array
    {
        if(!count($arr)) return $arr;
        for ($i = 0; $i <= (count($arr) - 2);$i++){
            for ($j = ($i + 1); $j <= (count($arr) - 1);$j++){
                if($arr[$i] > $arr[$j]) {
                    list($arr[$i], $arr[$j]) = [$arr[$j], $arr[$i]];
                }
            }
        }

        return $arr;
    }

    /**
     * 选择 最小值索引
     * @func
     * @Author: GG
     * @CreateDate: 2021/5/19 下午1:57
     * @param array $arr
     * @return array
     */
    private function speediness(array $arr):array
    {
        if(!count($arr)) return $arr;

        for ($i = 0; $i < count($arr); $i++){
            $min = $i;
            for ($j = $i+1; $j < count($arr); $j++ ){
                if($arr[$j] < $arr[$min]) $min = $j;
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        return $arr;
    }

    /**
     * 插入排序
     * @func
     * @Author: GG
     * @CreateDate: 2021/5/19 下午5:35
     * @param array $arr
     * @return array
     */
    private function insertSort(array $arr):array
    {
        if(!count($arr)) return $arr;
        $length = count($arr);
        for ($i = 0; $i < $length; $i++){
            $preIndex = $i - 1;
            $current = $arr[$i];
            while($preIndex >= 0 && $arr[$preIndex] > $current){
                $arr[$preIndex + 1] = $arr[$preIndex];
                $preIndex--;
            }

            $arr[$preIndex + 1] = $current;
        }

        return $arr;
    }

//    private function


}
