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
<body>
    <header>
        <div class="nav-2">
            <div class="nav-left">
                <div id="nav-overlay">
                    <div class="top">
                        <div class="link">
                            <img src="./Assets/home.png" alt="">
                            <a href="db.blade.php">Beranda</a>
                        </div>
                        <div class="link">
                            <img src="./Assets/quiz.png" alt="">
                            <a href="quiz.blade.php">Kuis</a>
                        </div>
                    </div>
                    <hr>
                    <div class="bottom">
                        <h4>Kelas</h4>
                        <div class="link">
                            <img src="./Assets/pp-guru.png" alt="">
                            <a href="./SamplePelajaran.blade.php">Bahasa Inggris</a>
                        </div>
                        <div class="link">
                            <img src="./Assets/pp-guru.png" alt="">
                            <a href="./SamplePelajaran.blade.php">Bahasa Inggris</a>
                        </div>
                    </div>
                </div>
                <img src="./Assets/charm_menu-hamburger.png" alt="" id="hamburger" onclick="show()">
                <img src="./Assets/Logo-default.png" alt="" id="logo-nav">
            </div>
            <div class="nav-right">
                <button class="quiz-btn">
                    <h3>Kuis</h3>
                </button>
                <img src="./Assets/pp-user.png" alt="">
            </div>
        </div>
    </header>

    <div class="super-wrapper">
        <section class="banner-subject">
            <div class="banner-subject-content">
                <img src="./Assets/pp-guru-big.png" alt="">
                <h4>Nama guru</h4>
                <h5>Nama mapel</h5>
            </div>
        </section>
        <section class="subject-bottom">
            <div class="calendar-container">
                <div id="calendar"></div>
            </div>
            <div class="list-tugas-container">
                <a class="list-tugas" href="SampleTugas.blade.php">
                    <img src="./Assets/tugas-icon.png" alt="">
                    <div class="list-tugas-content">
                        <h4>Nama Tugas</h4>
                        <h6>Deadline</h6>
                    </div>
                </a>
                <div class="list-tugas">
                    <img src="./Assets/tugas-icon.png" alt="">
                    <div class="list-tugas-content">
                        <h4>Nama Tugas</h4>
                        <h6>Deadline</h6>
                    </div>
                </div>
                <div class="list-tugas">
                    <img src="./Assets/tugas-icon.png" alt="">
                    <div class="list-tugas-content">
                        <h4>Nama Tugas</h4>
                        <h6>Deadline</h6>
                    </div>
                </div>
                <div class="list-tugas">
                    <img src="./Assets/tugas-icon.png" alt="">
                    <div class="list-tugas-content">
                        <h4>Nama Tugas</h4>
                        <h6>Deadline</h6>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('./js/script.js')}}"></script>
    <script>
        dycalendar.draw({
            target: '#calendar',
            type: 'month',
            dayformat: 'full',
            monthformat: 'full',
            highlighttargetdate: true,
            prevnextbutton: 'show',
        })
    </script>
</body>
</html>
