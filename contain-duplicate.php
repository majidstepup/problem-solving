<?php

function containDuplicate(array $nums): bool
{
    foreach ($nums as $value) {
        $newNums = [];
        foreach ($nums as $num) {
            if ($value == $num) {
                $newNums[] = $num;
            }

            if (count($newNums) > 1) {
                return true;
            }
        }
    }

    return false;
}

$input = [4, 1, 2, 1];

echo containDuplicate($input) . PHP_EOL;
