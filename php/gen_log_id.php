<?php
    function gen_log_id($request_ip)
    {
        $arrTime= gettimeofday();
        $log_id = $arrTime['sec']*100 + $arrTime['usec'];
        $log_id = $log_id ^ ip2long($request_ip);
        $log_id = $log_id & 0xfff;
        
        return floor($log_id/100)*100;
    }
