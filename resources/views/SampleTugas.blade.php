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
                <h1>Nama Pelajaran</h1>
            </div>
            <div class="nav-right">
                <img src="./Assets/pp-user.png" alt="">
            </div>
        </div>
    </header>

    <div class="super-wrapper">
        <section class="tugas-content">
            <div class="tugas-header">
                <div class="tugas-header-top">
                    <img src="./Assets/tugas-icon-big.png" alt="">
                    <h1>Nama Tugas</h1>
                </div>
                <div class="tugas-header-bottom">
                    <div class="tugas-header-bottom-left">
                        <h4>Nama Guru |&nbsp</h4>
                        <h4>Tanggal Assign</h4>
                    </div>
                    <div class="tugas-header-bottom-right">
                        <h4>Tenggat:&nbsp</h4>
                        <h4>Tanggal Tenggat</h4>
                    </div>
                </div>
                <hr>
                <h4>Upload your interview rating sheet and video link. The video should be uploaded on Drive/Youtube(UNLISTED) and accessible for us to check. The rating sheet is attached below
                Format: Group No_Class
                </h4>
                <div class="space"></div>
                <hr>
            </div>
        </section>
        <section class="comment">
            <div class="space"></div>
            <div class="comment-header">
                <img src="./Assets/comment-icon.png" alt="">
                <h4>Komentar Kelas</h4>
            </div>
            <div class="comment-list">
                <div class="comment-item">
                    <div class="comment-left"></div>
                    <div class="comment-right">
                        <div class="comment-right-top">
                            <h5>Nama</h5>
                            <p>Tanggal Post</p>
                        </div>
                        <div class="comment-right-bottom">
                            <h5>Isi Komentar</h5>
                        </div>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-left"></div>
                    <div class="comment-right">
                        <div class="comment-right-top">
                            <h5>Nama</h5>
                            <p>Tanggal Post</p>
                        </div>
                        <div class="comment-right-bottom">
                            <h5>Isi Komentar</h5>
                        </div>
                    </div>
                </div>
                <div class="comment-item">
                    <div class="comment-left"></div>
                    <div class="comment-right">
                        <div class="comment-right-top">
                            <h5>Nama</h5>
                            <p>Tanggal Post</p>
                        </div>
                        <div class="comment-right-bottom">
                            <h5>Isi Komentar</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-input">
                <div class="comment-left"></div>
                <form id="comment-field" type="submit">
                    <input id="comment" type="text" name="comment" placeholder="Tambahkan komentar">
                    <img id="send" src="./Assets/send.png" onmouseover="hover();" onmouseout="unhover();" onfocus="focus()">
                    <script>
                        function hover() {
                            let element = document.getElementById("send");
                            element.setAttribute('src', './Assets/send-hover.png');
                            element.transition(300).duration
                        }

                        function unhover() {
                            let element = document.getElementById("send");
                            element.setAttribute('src', './Assets/send.png');
                            element.transition(300).duration
                        }
                        function focus() {
                            let element = document.getElementById("comment-field");
                            element.style.borderColor = '#3B65F9';
                        }
                    </script>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
