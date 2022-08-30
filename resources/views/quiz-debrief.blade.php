<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./css/dycalendar.css')}}">
    <link rel="shortcut icon" href="./Assets/Logo-default.png">
    <title>BelajarNusa</title>
    <script defer src="{{asset('./js/script.js')}}"></script>
</head>
<body id="quiz-brief">
    <div class="quiz-bg"></div>
    <div class="quiz-card">
        <img src="./Assets/quiz-img.png" alt="">
        <div class="quiz-brief-content">
            <h3 id="h3-debrief">Nilai Kamu</h3>
            <h1 id="h1-debrief">100</h1>
            <a id="quiz-brief-btn" href="quiz.blade.php">
                <h4>Coba Lagi</h4>
            </a>
            <a id="quiz-debrief-btn" href="db.blade.php">
                <h4>Keluar</h4>
            </a>
        </div>
    </div>
</body>
</body>
</html>
