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
                <a href="./admin-task.html">Cancel</a>
                <a href="./index.html">Logout</a>
            </div>
    </div>
    <div id="popup-delete">
        <div class="popup-img">
            <img src="./Assets/popup-delete.png" alt="">
        </div>
            <h3>Are you sure want to delete this task?</h3>
            <div class="popup-buttons">
                <a href="./admin-task.html">Cancel</a>
                <a href="" class="marked2">Delete</a>
            </div>
    </div>
    <div id="darken">
        <div class="wrapper">
            <div class="filler"></div>
            <section class="sidebar">
                <img id="db-logo-admin" src="./Assets/Logo-default.png" alt="">
                <div class="sidebar-links">
                    <a href="./admindb.html">
                        <img src="./Assets/students-dark.png" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Students</h3>
                    </a>
                    <a href="./admin-task.html" class="marked">
                        <img src="./Assets/task-light.png" alt="">
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
                <form id="addTask" method="POST">
                    <input type="text" placeholder="Nama">
                    <div class="space"></div>
                    <h4>Tanggal tenggat</h4>
                    <input type="datetime-local">
                    <div class="space"></div>
                    <textarea rows="4" cols="50" placeholder="Deskripsi"></textarea>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="tasks-buttons">
                            <a href="./admin-task.html">
                                <h4>Cancel</h4>
                            </a>
                        <button class="task-btn-right" type="submit" onclick="">Post</button>
                    </div>
                </form>
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
        function popup2(){
            var x = document.getElementById("popup-delete");
            x.style.display = "block"
            var y = document.getElementById("darken");
            y.style.opacity = "0.3"
        }
    </script>
</body>
</html>
