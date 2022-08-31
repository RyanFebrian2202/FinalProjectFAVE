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
                            <a href="{{route('userDashboard')}}">Beranda</a>
                        </div>
                        <div class="link">
                            <img src="{{asset('Assets/quiz.png')}}" alt="">
                            <a href="{{route('getQuiz')}}">Kuis</a>
                        </div>
                    </div>
                    <hr>
                    <div class="bottom">
                        <h4>Kelas</h4>
                        @foreach ($courses as $item)
                        <div class="link">
                            <img src="{{asset('Assets/pp-guru.png')}}" alt="">
                            <a href="{{route('courseDetail',['id'=>$item->id])}}">{{$item->courseName}}</a>
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
                <img src="{{asset('Assets/pp-user.png')}}" alt="">
            </div>
        </div>
    </header>

    <div class="super-wrapper">
        <section class="banner-subject">
            <div class="banner-subject-content">
                <img src="{{asset('Assets/pp-guru-big.png')}}" alt="">
                <h4>{{$course->user->name}}</h4>
                <h5>{{$course->courseName}}</h5>
            </div>
        </section>
        <section class="subject-bottom">
            <div class="calendar-container">
                <div id="calendar"></div>
            </div>
            <div class="list-tugas-container">
                @foreach ($tasks as $task)
                <a class="list-tugas" href="{{route('taskDetail',['id'=>$task->id])}}">
                    <img src="{{asset('Assets/tugas-icon.png')}}" alt="">
                    <div class="list-tugas-content">
                        <h4>{{$task->taskName}}</h4>
                        <h6>{{$task->taskDeadline}}</h6>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
    </div>
    <script src="{{asset('js/dycalendar.js')}}"></script>
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
