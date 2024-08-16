<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>What Toki Pona Date is Today?</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body class="bg-primary">
    <div class="d-flex justify-content-center align-items-center flex-column h-100">
        <div class="text-center mb-4">
            <h2 class="text-warning">tenpo ni li tenpo seme?</h2>
            <h4 class="text-warning">What Toki Pona Date is Today?</h4>
        </div>
        <div class="text-center mb-4">
            <h2 class="text-warning">nasin tenpo penpo</h2>
            <h3 class="text-warning">Toki Pona Calendar</h3>
            <h4 class="text-warning">{{ $tokiPonaDate['dayName'] }} {{ $tokiPonaDate['weekName'] }} <br>
                {{ $tokiPonaDate['monthName'] }} <br>
                {{ $tokiPonaDate['yearName'] }} {{ $tokiPonaDate['cyclePartName'] }}</h4>
        </div>
        <div class="text-center mb-4">
            <h2 class="text-warning">nasin tenpo Kekoli</h2>
            <h3 class="text-warning">Gregorian Calendar</h3>
            <h4 class="text-warning">{{ $gregorianDate->format('d F Y') }}</h4>
        </div>
        <div class="text-center mb-4">
            <h6 class="text-warning">This site is a prototype, and it is still in construction :></h6>
        </div>
    </div>

</body>
</html>