<?php


// Function to generate year options from a given start year to the current year
function generateYearOptions($startYear = 2000)
{
    $currentYear = date('Y');
    $years = "";
    for ($year = $startYear; $year <= $currentYear; $year++) {
        $years .= "<option value='$year'>$year</option>";
    }
    return $years;
}

// Function to generate month options (January to December)
function generateMonthOptions()
{
    $months = [
        '01' => 'January',
        '02' => 'February',
        '03' => 'March',
        '04' => 'April',
        '05' => 'May',
        '06' => 'June',
        '07' => 'July',
        '08' => 'August',
        '09' => 'September',
        '10' => 'October',
        '11' => 'November',
        '12' => 'December'
    ];
    $monthOptions = "";
    foreach ($months as $key => $month) {
        $monthOptions .= "<option value='$key'>$month</option>";
    }
    return $monthOptions;
}

function identifyMonth($monthNumber)
{
    // Array of month names indexed by their number (1-12)
    $months = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December'
    ];

    // Return the month name based on the month number
    return isset($months[$monthNumber]) ? $months[$monthNumber] : 'Invalid month';
}

?>