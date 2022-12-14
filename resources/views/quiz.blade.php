<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/dycalendar.css')}}">
    <link rel="shortcut icon" href="{{asset('Assets/Logo-default.png')}}">
    <title>BelajarNusa</title>
    <script defer src="{{asset('js/script.js')}}"></script>
</head>
<body>
    <!-- Timer quiznya masih ngebug -->
    <section id="quiz-content">
        <div class="quiz-content-header">
            <span><h2>Pertanyaan&nbsp<h2 id="que_count">0</h2></span>
            <h2 id="timer">3:00</h2>
        </div>
        <div class="super-wrapper">
            @foreach($questions as $question)
            <div class="question-container" id="{{$loop->index}}">
                <h1>{{$question->question}}</h1>
                <form action="" id="question-form">
                    <input type="text" placeholder="Jawablah dengan jujur" id="userAnswer-{{$loop->index}}">
                    <div class="button-wrapper">
                        <button id="nextQuestion" type="button" onclick="setTimer();">Lanjut</button>
                    </div>
                </form>
                <a id="submitQuestion" href="{{route('quizEnd')}}">Kumpul</a>
            </div>
            @endforeach
        </div>
    <script>
    // declare variabel nilai untuk store nilai user, value awalnya adalah 0
    const queCount = document.getElementById('que_count');
    var countDownDate = new Date().getTime() + 3.03*60000;

    var x;

    setTimer();

    function setTimer() {
        var activeQuestion = document.getElementsByClassName("question-container");

        //var activeAnswer = document.getElementById(`${$answer->answer}`);

        for(let i = 0; i < activeQuestion.length; i++) {
            activeQuestion[i].classList.remove('active');
            // ambil data jawaban dari user, ambil jawaban dari soal ke-i
            // bandingkan jawaban user dgn jawaban soal ke-i, jika benar maka nilai user akan bertambah 10
        }

        var currentQuestion = document.getElementById(`${queCount.innerHTML}`);
        console.log(`${queCount.innerHTML}`);
        console.log(currentQuestion);

        currentQuestion.classList.add('active');

        clearInterval(x);

        var number = queCount.innerHTML;
        number++;
        queCount.innerHTML = number;

        if(number == 11){
            // pada akhir kuis nilai user akan ditampilkan
            window.location.href="/user/quiz/debrief";
        }

        var countDownDate = new Date().getTime() + 3.03*60000;

        x = setInterval(function() {
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = minutes + ":" + String(seconds).padStart(2, '0');

        if (distance < 1000) {
            clearInterval(x);
            setTimer();
        }
        }, 1000);
    }
    </script>
    </section>
</body>
</html>

