<?php

 // simulate cron
 // to be included by some index.php with enough traffic



 $lockfile_cron='stat/cron-daily-lock'; // file with today-s date means: ran already this day
                                        // todo: move to directory var or tmp
 $cron_run='cron-daily-reminder.php';

 $cron_fire_hour=6; // cron 0 6 * * * 
 $current_hour=date('h');



function has_todays_date($fname, $dateformat='dmY')
 {
   if (!file_exists($fname)) return false;
   $fdate= date( $dateformat, filemtime($fname) );
   $cdate= date( $dateformat );
   return $fdate == $cdate;
 }



if ($current_hour >= $cron_fire_hour) // kas kell on niikaugel?
 {
  if (!has_todays_date($lockfile_cron))
    {
     touch($lockfile_cron); // set "has already run today" - flag
     include $cron_run;
    }
 }
