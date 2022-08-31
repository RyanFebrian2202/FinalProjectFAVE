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
                        @foreach ($courses as $course)
                        <div class="link">
                            <img src="{{asset('Assets/pp-guru.png')}}" alt="">
                            <a href="{{route('courseDetail',['id'=>$course->id])}}">{{$course->courseName}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <img src="{{asset('Assets/charm_menu-hamburger.png')}}" alt="" id="hamburger" onclick="show()">
                <h1>{{$task->course->courseName}}</h1>
            </div>
            <div class="nav-right">
                <img src="{{asset('Assets/pp-user.png')}}" alt="">
            </div>
        </div>
    </header>

    <div class="super-wrapper">
        <section class="tugas-content">
            <div class="tugas-header">
                <div class="tugas-header-top">
                    <img src="{{asset('Assets/tugas-icon.png')}}" alt="">
                    <h1>{{$task->taskName}}</h1>
                </div>
                <div class="tugas-header-bottom">
                    <div class="tugas-header-bottom-left">
                        <h4>{{$task->course->user->name}}</h4>
                        <h4>{{date('d M', strtotime($task->created_at))}}</h4>
                    </div>
                    <div class="tugas-header-bottom-right">
                        <h4>Tenggat:{{date('H:i', strtotime($task->taskDeadline))}}</h4>
                        <h4>{{date('d M', strtotime($task->taskDeadline))}}</h4>
                    </div>
                </div>
                <hr>
                <h4>{{$task->taskDetail}}
                </h4>
                <div class="space"></div>
                <hr>
            </div>
        </section>
        <section class="comment">
            <div class="space"></div>
            <div class="comment-header">
                <img src="{{asset('Assets/comment-icon.png')}}" alt="">
                <h4>Komentar Kelas</h4>
            </div>
            <div class="comment-list">
                @foreach ($comments as $comment)
                <div class="comment-item">
                    <div class="comment-left"></div>
                    <div class="comment-right">
                        <div class="comment-right-top">
                            <h5>{{$comment->user->name}}</h5>
                            <p>{{date('d M', strtotime($comment->created_at))}}</p>
                        </div>
                        <div class="comment-right-bottom">
                            <h5>{{$comment->content}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="comment-input">
                <div class="comment-left"></div>
                <form id="comment-field" action="{{route('postComment',['id'=>$task->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input id="comment" type="text" name="content" placeholder="Tambahkan komentar">
                    <button id="submitComment" type="submit">
                        <img id="send" src="{{asset('Assets/send.png')}}" onmouseover="hover();" onmouseout="unhover();" onfocus="focus()">
                    </button>
                    <script>
                        function hover() {
                            let element = document.getElementById("send");
                            element.setAttribute('src', "{{asset('Assets/send-hover.png')}}");
                            element.transition(300).duration
                        }

                        function unhover() {
                            let element = document.getElementById("send");
                            element.setAttribute('src', "{{asset('Assets/send.png')}}");
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
