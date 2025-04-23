<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber(array $nums)
{
    foreach ($nums as $value) {
        $newNums = [];
        foreach ($nums as $num) {
            if ($value == $num) {
                $newNums[] = $num;
            }

            if (count($newNums) > 1) {
                break;
            }
        }

        if (count($newNums) == 1) {
            return $value;
        }
    }

    return 0;
}

// function singleNumber(array $nums)
// {
//     $res = 0;
//     $array = [];
//     foreach($nums as $num){
//         if(isset( $array[$num] )){
//             $array[$num] += 1;
//         } else {
//             $array[$num] = 1;
//         }
//     }
//     foreach($array as $key => $a){
//         if($a == 1){
//             $res = $key;
//             break;
//         }
//     }
//     return $res;
// }

$input = [4, 1, 2, 1, 2];

echo singleNumber($input) . PHP_EOL;
