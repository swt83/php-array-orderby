<?php

if (!function_exists('array_orderby'))
{
    function array_orderby($array, $cols)
    {
        // convert to array
        $array = object2array($array);

        // capture values
        $colarr = [];
        foreach ($cols as $col => $order)
        {
            $colarr[$col] = [];
            foreach ($array as $k => $row)
            {
                $colarr[$col]['_'.$k] = strtolower(ex($row, $col));
            }
        }

        // evaluate values
        $eval = 'array_multisort(';
        foreach ($cols as $col => $order)
        {
            $eval .= '$colarr[\''.$col.'\'], '.$order.',';
        }
        $eval = substr($eval, 0, -1).');';
        eval($eval);

        // prepare final
        $ret = [];
        foreach ($colarr as $col => $arr)
        {
            foreach ($arr as $k => $v)
            {
                // get original key
                $k = substr($k, 1);

                // add to clean array
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
            }
        }

        // return w/ fresh keys
        return array_values($ret);
    }
}