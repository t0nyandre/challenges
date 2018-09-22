<?php
function sieve($n)
{
    if ($n < 2) {
        return [];
    }

    $range = range(2, $n);

    foreach ($range as $k => $v) {
        for ($i = $k + 1; $i < count($range); $i++) {
            if ($range[$i] % $v == 0) {
                unset($range[$i]);
                $range = array_values($range);
            }
        }
    }

    return $range;
}
