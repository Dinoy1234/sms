<div class="sidebar" id="sidebar" style="overflow-y: scroll;">
    <div class="slimScrollDiv">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                   

                    {{-- @if (Auth()->user()->role=="admin" || Auth()->user()->role=="teacher") --}}
                    <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('master.index') }}">Dashboard</a></li>
                            {{-- <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                        <li><a href="student-dashboard.html">Student Dashboard</a></li>  --}}
                        </ul>
                    </li>
                    {{-- @endif --}}
                    @if(auth()->user()->role=='student')
                    <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Profile</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('master.profile') }}">View Profile</a></li>
                        </ul>
                    </li>
                    @endif
                    @if (Auth()->user()->role=="admin")
                    <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('student.index') }}">Student List</a></li>
                            <li><a href="{{ route('student.create') }}">Student Add</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('teacher.index') }}">Teacher List</a></li>
                            <li><a href="{{ route('teacher.create') }}">Teacher Add</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Class</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('department.index') }}">Class List</a></li>
                            <li><a href="{{ route('department.create') }}">Class Add</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{ route('subject.index') }}">Subject List</a></li>
                            <li><a href="{{ route('subject.create') }}">Subject Add</a></li>
                        </ul>
                    </li>
                    @endif
                    @if (auth()->user()->role=="admin")
                    <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Section</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{route('student.class')}}">Set Section</a></li>
                            <li><a href="{{route('student.class.show')}}">Section Wise Students</a></li>
                        </ul>
                    </li>
                    @endif

                    @if (auth()->user()->role=="admin" || auth()->user()->role=="teacher")
                    <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Attendance</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{route('student.attendance')}}"> Attendance</a></li>
                            <li><a href="{{route('student.attendance.show')}}">Attendance Show</a></li>
                            
                        </ul>
                    </li>
                    @endif
                    <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span>Exam</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            @if (auth()->user()->role=="admin")
                            <li><a href="{{route('exam_index')}}">Exam List</a></li>
                            <li><a href="{{route('exam_create')}}">Exam Add</a></li>
                            <li><a href="#">Exam Result</a></li>
                            @elseif (auth()->user()->role=="teacher")
                            <li><a href="{{route('exam_create')}}">Exam Add</a></li>
                            <li><a href="{{route('teacher.exam.list')}}">Exam list</a></li>
                            <li><a href="#">Exam Result</a></li>
                            @else
                            <li><a href="{{route('student.exam.list')}}">My Exam List</a></li>
                            <li><a href="#">Exam Result</a></li>
                            @endif
                        </ul>
                    </li>
                    @if (auth()->user()->role=="admin" || auth()->user()->role=="teacher")
                    <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span>Question</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{route('quesion_index')}}">Question List</a></li>
                            <li><a href="{{route('quesion_create')}}">Question Add</a></li>
                        </ul>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
</div>
