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

    <header>
        <div class="nav-3">
            <div class="nav-left">
                <div id="nav-overlay">
                    <div class="sidebar-links">
                        <a href="{{route('adminDashboard')}}" class="marked">
                            <img src="{{asset('Assets/students-dark.png')}}" alt="">
                            <div class="space-horizontal"></div>
                            <h3>Students</h3>
                        </a>
                        <a href="{{route('adminTask')}}">
                            <img src="{{asset('Assets/task-light.png')}}" alt="">
                            <h3>Tasks</h3>
                        </a>
                        <button onclick="popup()">
                            <img src="{{asset('Assets/logout.png')}}" alt="">
                            <div class="space-horizontal"></div>
                            <h3>Logout</h3>
                        </button>
                    </div>
                    <hr>
                </div>
                <img src="{{asset('Assets/charm_menu-hamburger.png')}}" alt="" id="hamburger" onclick="show()">
                <img src="{{asset('Assets/Logo-default.png')}}" alt="" id="logo-nav">
            </div>
        </div>
    </header>

    <div id="popup-log">
        <div class="popup-img">
            <img src="{{asset('Assets/popup-exit.png')}}" alt="">
        </div>
            <h3>Are you sure want to logout?</h3>
            <div class="popup-buttons">
                <a href="{{route('adminDashboard')}}">Cancel</a>
                <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
    </div>
    <div id="darken">
        <div class="wrapper">
            <section class="sidebar">
                <img id="db-logo-admin" src="{{asset('Assets/Logo-default.png')}}" alt="">
                <div class="sidebar-links">
                    <a href="{{route('adminDashboard')}}" class="marked">
                        <img src="{{asset('Assets/students-light.png')}}" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Students</h3>
                    </a>
                    <a href="{{route('adminTask')}}">
                        <img src="{{asset('Assets/task-dark.png')}}" alt="">
                        <h3>Tasks</h3>
                    </a>
                    <button onclick="popup()">
                        <img src="{{asset('Assets/logout.png')}}" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Logout</h3>
                    </button>
                </div>
            </section>
                <section class="student-list">
                    @foreach ($users as $user)
                    <div class="student-card">
                        <img src="{{asset('Assets/pp-murid.png')}}" alt="">
                        <div class="student-card-content">
                            <h4>{{$user->name}}</h4>
                            <h6>{{$user->class}}</h6>
                        </di
                    @endforeach
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
