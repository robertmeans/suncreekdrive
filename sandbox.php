<?php 

// Convert $total_minutes to hours and minutes.

// $total_minutes = 318;
// $minutes = $total_minutes % 60;
// $hours = ($total_minutes - $minutes) / 60;

// echo "Time taken was $hours hours $minutes minutes<br />";

//  ?>

// <hr>

// <?php 

// $number = 2;

// function ewd_timesTwo($foo) {
//     return $foo *= 2;
// }

// $doubled = ewd_timesTwo(8);

// echo '$doubled is ' . $doubled . '<br />';
// echo '$number is ' . $number . '<br />';

 ?>
 <hr>

 <?php 

function ewd_convertToMinutes($seconds) {
    $sec = $seconds % 60; // whatever's left over after dividing by 60 = $sec
    $min = ($seconds - $sec) / 60; // total $seconds - leftover / 60 = $min ... now need hours
    $minutes = $min % 60; // $minutes will = leftover of dividing by 60 because we need 60 minutes per hour
    $hrs = ($minutes - $min) / 60; // 
    $hours = $hrs % 24;
    $days = ($hours - $hrs) / 24;
    $dayz = $days % 7;
    $week = ($dayz - $days) / 7;
    $weeks = $week % 4;
    $month = ($weeks - $week) / 4;


    $sec = abs($sec);
    $minutes = abs($minutes);
    $hours = abs($hours);
    $dayz = abs($dayz);
    $weeks = abs($weeks);
    $month = abs($month);


    $sec = ($sec < 10 ) ? '0' . $sec : $sec;
    $minutes = ($minutes < 10 ) ? '0' . $minutes : $minutes;
    $hours = ($hours < 10 ) ? '0' . $hours : $hours;
    $dayz = ($dayz < 10) ? '0' . $dayz : $dayz;
    $weeks = ($weeks < 10) ? '0' . $weeks : $weeks;
    $month = ($month < 10) ? '0' . $month : $month;

    return "$month:$weeks:$dayz:$hours:$minutes:$sec";
}

echo ewd_convertToMinutes(29030399);

  ?>

  <hr>

  <?php 
  $xmas2017 = strtotime('Dec 25, 2017');
  echo date('l, F j, Y', $xmas2017) . '<br />';

  $date1 = new DateTime();
  echo $date1;

   ?>



















 <script src="http://localhost:35729/livereload.js"></script>