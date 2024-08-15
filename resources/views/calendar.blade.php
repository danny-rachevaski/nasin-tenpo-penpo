<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>What Toki Pona Date is Today?</title>
    <style>
        /* Custom styles */
        .date-container {
            background-color: #3B71CA; /* Light grey background color */
            padding: 20px;
            border-radius: 8px;
            margin: 20px; /* Center the div horizontally */
            border-style: solid;
            border-color: #ffd105;
            border-width: 20px;
        }

        .date-container-2 {
            background-color: #3B71CA; /* Light grey background color */
            padding: 0px;
            border-radius: 8px;
            margin: 20px; /* Center the div horizontally */
        }

        .container {
            margin-top: 50px; /* Optional: Adds some space from the top */
        }
    </style>
</head>
<body class="bg-primary">
    <div class="container text-center">
            <div class="col-sm-12 date-container-2">
                <h2 class="text-center">tenpo ni li tenpo seme?</h2>
                <h4 class="text-center">What Toki Pona Date is Today?</h4>
                <br>
                <br>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 date-container">
                    <h2 class=" ">Toki Pona Calendar</h2>
                    <h3 class=" ">{{ $tokiPonaDate['dayName'] }} {{ $tokiPonaDate['weekName'] }} <br>
                        {{ $tokiPonaDate['monthName'] }} <br>
                        {{ $tokiPonaDate['yearName'] }} {{ $tokiPonaDate['cyclePartName'] }}</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 date-container-2">
                    <h2 class=" ">Gregorian Calendar</h2>
                    <h3 class=" ">{{ $gregorianDate->toFormattedDateString() }}</h3>
                </div>
            </div>

    </div>
</body>
</html>
