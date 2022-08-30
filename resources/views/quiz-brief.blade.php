<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dycalendar.css')}}">
    <link rel="shortcut icon" href="{{asset('Assets/Logo-default.png')}}">
    <title>BelajarNusa</title>
    <script defer src="{{asset('js/script.js')}}"></script>
</head>
<body>
    <section id="quiz-brief">
        <div class="quiz-bg"></div>
        <div class="quiz-card">
            <img src="{{asset('Assets/quiz-img.png')}}" alt="">
            <div class="quiz-brief-content">
                <h1>Quiz</h1>
                <hr>
                <h5><u>Keterangan:</u></h5>
                <h5>Terdapat total 10 pertanyaan</h5>
                <h5>Diberi waktu 3 menit untuk menjawab setiap soal</h5>
                <a id="quiz-brief-btn" href="quiz.blade.php">
                    <img src="{{asset('Assets/play-quiz.png')}}" alt="">
                    <h4>Mulai</h4>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
