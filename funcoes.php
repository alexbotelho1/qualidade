<?php
function getWorkingDays($startDate, $endDate)
{
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {
        echo "startdate is in the future! <br />";

        return 0;
    } else {
        $no_days  = 0;
        $weekends = 0;
        while ($begin <= $end) {
            $no_days++; // no of days in the given interval
            $what_day = date("N", $begin);
            if ($what_day > 5) { // 6 and 7 are weekend days
                $weekends++;
            };
            $begin += 86400; // +1 day
        };
        $working_days = $no_days - $weekends;

        return $working_days;
    }
}

function getWorkingDays2($startDate, $endDate) {
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {
        echo "startdate is in the future! <br />";
        return 0;
    }
    else {
        $holidays = array('01/01', '08/02', '09/02', '10/02', '21/04', '01/05', '07/09', '12/10', '02/11', '15/11', '24/12', '25/12');
        $weekends = 0;
        $no_days = 0;
        $holidayCount = 0;
        while ($begin <= $end) {
            $no_days++; // no of days in the given interval
            if (in_array(date("d/m", $begin), $holidays)) {
                $holidayCount++;
            }
            $what_day = date("N", $begin);
            if ($what_day > 5) { // 6 and 7 are weekend days
                $weekends++;
            };
            $begin += 86400; // +1 day
        };
        $working_days = $no_days - $weekends - $holidayCount;

        return $working_days;
    }
}
?>