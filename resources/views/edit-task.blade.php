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
                        <a href="{{route('adminDashboard')}}">
                            <img src="{{asset('Assets/students-dark.png')}}" alt="">
                            <div class="space-horizontal"></div>
                            <h3>Students</h3>
                        </a>
                        <a href="{{route('adminTask')}}" class="marked">
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
                <a href="{{route('adminTask')}}">Cancel</a>
                <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <a href="">Logout</a>
                </form>
            </div>
    </div>
    <div id="popup-delete">
        <div class="popup-img">
            <img src="{{asset('Assets/popup-delete.png')}}" alt="">
        </div>
            <h3>Are you sure want to delete this task?</h3>
            <div class="popup-buttons">
                <a href="{{route('adminTask')}}">Cancel</a>
                <a href="" class="marked2">Delete</a>
            </div>
    </div>
    <div id="darken">
        <div class="wrapper">
            <div class="filler"></div>
            <section class="sidebar">
                <img id="db-logo-admin" src="{{asset('Assets/Logo-default.png')}}" alt="">
                <div class="sidebar-links">
                    <a href="{{route('adminDashboard')}}">
                        <img src="{{asset('Assets/students-dark.png')}}" alt="">
                        <div class="space-horizontal"></div>
                        <h3>Students</h3>
                    </a>
                    <a href="{{route('adminTask')}}" class="marked">
                        <img src="{{asset('Assets/task-light.png')}}" alt="">
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
                <form id="addTask" method="POST" action="{{route('updateTask',['id'=>$task->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <input type="text" name="taskName" value="{{$task->taskName}}">
                    <div class="space"></div>
                    <select id="course" name="course">
                        <option value="{{$task->course->id}}" selected>{{$task->course->courseName}}</option>
                        @foreach ($courses as $course)
                        @if($course->id === $task->course->id)
                        {{-- Kosong --}}
                        @else
                        <option value="{{$course->id}}">{{$course->courseName}}</option>
                        @endif
                        @endforeach
                    </select>
                    <h4>Tanggal tenggat</h4>
                    <input type="datetime-local" name="taskDeadline" value="{{date('Y-m-d\TH:i', strtotime($task->taskDeadline))}}">
                    <div class="space"></div>
                    <textarea rows="4" cols="50" name="taskDetail" value="{{$task->taskDetail}}">{{$task->taskDetail}}</textarea>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="tasks-buttons">
                            <a href="{{route('adminTask')}}">
                                <h4>Cancel</h4>
                            </a>
                        <button class="task-btn-right" type="submit" onclick="">Save</button>
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
