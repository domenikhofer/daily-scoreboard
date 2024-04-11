<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Scoreboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?123">
    <script src="lottie.min.js"></script>
    <script>
        let currentScore = {{$score}}
        let storeRoute = "{{route('store')}}"
    </script>
    <script src="script.js" defer></script>
</head>

<body>
    <div id="background-container"></div>

    <div class="content">

        <div class="card">
            <div class="title">Daily Scoreboard &trade;</div>
            <div class="divider"></div>
            <div class="record">
                <div class="label">Current Record</div>
                <div class="time">{{$formatted}}</div>
            </div>
            <div class="record">
                <div class="label">Longest Daily</div>
                <div class="time">{{$formattedMax}}</div>
            </div>
            <div class="record">
                <div class="label">Last Daily</div>
                <div class="time">{{$formattedLast}}</div>
            </div>
            <a id="startStop" class="startStop"></a>
            <div class="newTime hidden">
                <canvas class="canvas"></canvas>
                <div class="title">03:22:55</div>
                <div class="badge">New Record!</div>

            </div>
        </div>



    </div>




</body>

</html>
