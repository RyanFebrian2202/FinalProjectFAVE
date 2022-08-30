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
        <div class="nav-2">
            <div class="nav-left">
                <div id="nav-overlay">
                    <div class="top">
                        <div class="link">
                            <img src="{{asset('Assets/home.png')}}" alt="">
                            <a href="{{route('userDashboard')}}}">Beranda</a>
                        </div>
                        <div class="link">
                            <img src="{{asset('Assets/quiz.png')}}" alt="">
                            <a href="quiz.blade.php">Kuis</a>
                        </div>
                    </div>
                    <hr>
                    <div class="bottom">
                        <h4>Kelas</h4>
                        @foreach ($courses as $course)
                        <div class="link">
                            <img src="{{asset('Assets/pp-guru.png')}}" alt="">
                            <a href="{{route('courseDetail',['id'=>$course->id])}}">{{$course->courseName}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <img src="{{asset('Assets/charm_menu-hamburger.png')}}" alt="" id="hamburger" onclick="show()">
                <img src="{{asset('Assets/Logo-default.png')}}" alt="" id="logo-nav">
            </div>
            <div class="nav-right">
                <button class="quiz-btn">
                    <h3>Kuis</h3>
                </button>
                <img src="{{asset('Assets/pp-murid.png')}}" alt="">
            </div>
        </div>
    </header>

    <section class="content-db">
        <div class="header-db">
                <h2>Never stop learning, {{$user->name}}</h2>
                <h2 id="username-show"></h2>
                <script>
                    document.getElementById("username-show").innerHTML=localStorage.getItem("textvalue");
                </script>
        </div>
    </section>

    <section class="Subject">
        <div class="card-container">
            <div class="card-row-container">
                @foreach ($courses1 as $course1)
                <a class="card" href="{{route('courseDetail',['id'=>$course1->id])}}">
                    <div class="card-header">
                        <img src="{{asset('Assets/SubjectImg.png')}}" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>{{$course1->courseName}}</h3>
                            <h5>{{$course1->user->name}}</h5>
                        </div>
                        <img src="{{asset('Assets/pp-guru.png')}}" alt="">
                    </div>
                    @php
                        use App\Models\Task;
                        $tasks = Task::where('course_id','=',$course1->id)->orderBy('taskDeadline','asc')->take(3)->get();
                    @endphp
                    @foreach ($tasks as $task)
                    <div class="deadline">
                        <h5>{{$task->taskName}}</h5>
                        <h5>{{$task->taskDeadline}}</h5>
                    </div>
                    @endforeach
                </a>
                @endforeach
            </div>
            <div class="card-row-container">
                @foreach ($courses2 as $course2)
                <a class="card" href="{{route('courseDetail',['id'=>$course2->id])}}">
                    <div class="card-header">
                        <img src="{{asset('Assets/SubjectImg.png')}}" alt="">
                    </div>
                    <div class="card-content-container">
                        <div class="card-content">
                            <h3>{{$course2->courseName}}</h3>
                            <h5>{{$course->user->name}}</h5>
                        </div>
                        <img src="{{asset('Assets/pp-guru.png')}}" alt="">
                    </div>
                    @php
                        use App\Models\Task;
                        $tasks = Task::where('course_id','=',$course2->id)->orderBy('taskDeadline','asc')->take(3)->get();
                    @endphp
                    @foreach ($tasks as $task)
                    <div class="deadline">
                        <h5>{{$task->taskName}}</h5>
                        <h5>{{$task->taskDeadline}}</h5>
                    </div>
                    @endforeach
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="quiz-banner">
        <div class="banner">
            <div class="banner-left">
                <img src="{{asset('Assets/Line Assets/Line 2.png')}}" alt="">
                <div class="banner-left-content">
                    <h1>Ayo, Uji Kemampuanmu</h1>
                    <h1>Melalui <span>Kuis</span>!</h1>
                </div>
            </div>
            <div class="banner-right">
                <a href="quiz.blade.php" class="banner-btn"onmouseover="hover();" onmouseout="unhover();">
                    <h3>Kerjakan Kuis</h3>
                    <img id="banner-btn" src="{{asset('Assets/arrow-right-default.png')}}"/>
                    <script>
                        function hover() {
                            let element = document.getElementById("banner-btn");
                            element.setAttribute('src', "{{asset('Assets/arrow-right-hover.png')}}");
                            element.transition(300).duration
                        }

                        function unhover() {
                            let element = document.getElementById("banner-btn");
                            element.setAttribute('src', "{{asset('Assets/arrow-right-default.png')}}");
                            element.transition(300).duration
                        }
                    </script>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
