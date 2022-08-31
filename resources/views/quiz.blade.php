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
            <span><h2>Pertanyaan&nbsp<h2 id="que_count">1</h2></span>
            <h2 id="timer">3:00</h2>
        </div>
        <div class="super-wrapper">
            <div class="question-container">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa convallis id pulvinar pretium non tristique.</h1>
                <form action="" id="question-form">
                    <input type="text" placeholder="Jawablah dengan jujur">
                    <div class="button-wrapper">
                        <button id="nextQuestion" type="submit" onclick="setTimer();">Lanjut</button>
                    </div>
                </form>
                <a id="submitQuestion" href="quiz-debrief.blade.php">Kumpul</a>
            </div>
        </div>
    <script>
    // Klo pencet next pagenya kerefresh lagi (Angkanya jg ngulang jadi 1 lagi)
    var countDownDate = new Date().getTime() + 3.03*60000;

    var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = minutes + ":" + String(seconds).padStart(2, '0');

    if (distance < 2000) {
        clearInterval(x);
        setTimer();
    }
    }, 1000);

    function setTimer() {

        clearInterval(x);
        var queCount = document.getElementById('que_count');
        var number = queCount.innerHTML;
        number++;
        queCount.innerHTML = number;

        if(number == 10){
            document.getElementById("submitQuestion").style.display = "block";
        }

        if(number > 10){
            window.location.href="./quiz-debrief.html";
        }

        var countDownDate = new Date().getTime() + 3.03*60000;

        x = setInterval(function() {
        console.log("Test");
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = minutes + ":" + String(seconds).padStart(2, '0');

        if (distance < 2000) {
            clearInterval(x);
            setTimer();
        }
        }, 1000);
    }
    </script>
    </section>
</body>
</html>