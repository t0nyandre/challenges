<?php
function isLeap($input)
{
    if (is_int($input/400)) {
        return true;
    } elseif (is_int($input/100)) {
        return false;
    } elseif (is_int($input/4)) {
        return true;
    }
    return false;
}
