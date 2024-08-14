<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendars</title>
</head>
<body>
    <h1>Gregorian Calendar</h1>
    <p>{{ $gregorianDate->toFormattedDateString() }}</p>

    <h1>Toki Pona Calendar</h1>
    <p>{{ $tokiPonaDate['dayName'] }}, {{ $tokiPonaDate['monthName'] }} {{ $tokiPonaDate['yearName'] }} in the cycle {{ $tokiPonaDate['cyclePartName'] }}</p>
</body>
</html>
