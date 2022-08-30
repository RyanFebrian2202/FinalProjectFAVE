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

    <section class="content-db">
        <div class="header-db">
                <h2>Never stop learning,&nbsp</h2>
                <h2 id="username-show"></h2>
                <script>
                    document.getElementById("username-show").innerHTML=localStorage.getItem("textvalue");
                </script>
        </div>
    </section>

    <section class="Subject">
        <div class="card-container">
            <div class="card-row-container">
                <a class="card" href="./SamplePelajaran.blade.php">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </a>
                <div class="card">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </div>
            </div>
            <div class="card-row-container">
                <div class="card">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="./Assets/SubjectImg.png" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>Pelajaran</h3>
                            <h5>Nama Guru</h5>
                        </div>
                        <img src="./Assets/pp-guru.png" alt="">
                    </div>
                    <div class="deadline">
                        <h5>Nama Tugas</h5>
                        <h5>Deadline</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quiz-banner">
        <div class="banner">
            <div class="banner-left">
                <img src="./Assets/Line 2.png" alt="">
                <div class="banner-left-content">
                    <h1>Ayo, Uji Kemampuanmu</h1>
                    <h1>Melalui <span>Kuis</span>!</h1>
                </div>
            </div>
            <div class="banner-right">
                <a href="quiz.blade.php" class="banner-btn"onmouseover="hover();" onmouseout="unhover();">
                    <h3>Kerjakan Kuis</h3>
                    <img id="banner-btn" src="./Assets/arrow-right-default.png"/>
                    <script>
                        function hover() {
                            let element = document.getElementById("banner-btn");
                            element.setAttribute('src', './Assets/arrow-right-hover.png');
                            element.transition(300).duration
                        }

                        function unhover() {
                            let element = document.getElementById("banner-btn");
                            element.setAttribute('src', './Assets/arrow-right-default.png');
                            element.transition(300).duration
                        }
                    </script>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
