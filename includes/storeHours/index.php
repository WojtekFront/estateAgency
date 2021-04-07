<!DOCTYPE html>
<html lang="pl" xml:lang="pl"><head>
    <meta charset="utf-8">

    <head>
        
    </head>

    <body>

    

    <?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Europe/Warsaw');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

    // REQUIRED
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array('9:00-17:00'),
        'tue' => array('9:00-17:00'),
        'wed' => array('9:00-17:00'),
        'thu' => array('9:00-17:00'), 
        'fri' => array('9:00-17:00'),
        'sat' => array('9:00-13:00'),
        'sun' => array('')
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array(
        '12/25'  => array(''),
        '4/7' => array('')
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' i ',
        'format'         => 'G:i',
        'overview_weekdays'  => array('poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota', 'niedziela')
    );

    // Instantiate class
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
   

    // Display full list of open hours (for a week without exceptions)
    // echo '<table>';
    // foreach ($store_hours->hours_this_week() as $days => $hours) {
    //     echo '<tr>';
    //     echo '<td>' . $days . '</td>';
    //     echo '<td>' . $hours . '</td>';
    //     echo '</tr>';
    // }
    // echo '</table>';

    // Same list, but group days with identical hours
    
    foreach ($store_hours->hours_this_week(true) as $days => $hours) {
        
        echo $days . '<br>';

        echo  $hours . '<br>';
        
    }
    echo"<br>";

echo "<small>";
 // Display open / closed message
 if($store_hours->is_open()) {
    echo "<div class='info open'> Dzisiaj otwarte w godzinach: " . $store_hours->hours_today() . ".</div>";
} else {
    echo "<div class='info close'>Zamknięte.</div>";
}
echo"</small>";
    ?>

    </body>

</html>
