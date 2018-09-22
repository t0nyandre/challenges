<?php
function from($date)
{
    $clonedDate = clone $date;
    return $clonedDate->modify('+1000000000 secs');
}
