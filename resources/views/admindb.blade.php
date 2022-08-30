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
    <div id="popup-log">
        <div class="popup-img">
            <img src="./Assets/popup-exit.png" alt="">
        </div>
            <h3>Are you sure want to logout?</h3>
            <div class="popup-buttons">
                <a href="./admindb.html">Cancel</a>
                <a href="./index.html">Logout</a>
            </div>
    </div>
    <div id="darken">
        <div class="wrapper">
            <section class="sidebar">
                <img id="db-logo-admin" src="./Assets/Logo-default.png" alt="">
                <div class="sidebar-links">
                    <a href="./admindb.html" class="marked">
                        <img src="./Assets/students-light.png" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Students</h3>
                    </a>
                    <a href="./admin-task.html">
                        <img src="./Assets/task-dark.png" alt="">
                        <h3>Tasks</h3>
                    </a>
                    <button onclick="popup()">
                        <img src="./Assets/logout.png" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Logout</h3>
                    </button>
                </div>
            </section>
                <section class="student-list">
                    <div class="student-card">
                        <img src="./Assets/pp-murid.png" alt="">
                        <div class="student-card-content">
                            <h4>Nama Murid</h4>
                            <h6>Kelas</h6>
                        </div>
                    </div>
                    <div class="student-card">
                        <img src="./Assets/pp-murid.png" alt="">
                        <div class="student-card-content">
                            <h4>Nama Murid</h4>
                            <h6>Kelas</h6>
                        </div>
                    </div>
                    <div class="student-card">
                        <img src="./Assets/pp-murid.png" alt="">
                        <div class="student-card-content">
                            <h4>Nama Murid</h4>
                            <h6>Kelas</h6>
                        </div>
                    </div>
                </section>
        </div>

    </div>
    <script>
        function popup(){
            var x = document.getElementById("popup-log");
            x.style.display = "block"
            var y = document.getElementById("darken");
            y.style.opacity = "0.3"
        }
    </script>
</body>
</html>
