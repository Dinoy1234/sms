<div class="header">
    <div class="header-left">
        <a href="{{route('master.index')}}" class="logo" >
            <img src="{{url('backend/assets/img/pre.png')}}" style=" max-height: 123px;" alt="Logo" width="170" height="160" >
        </a>
        <a href="{{route('master.index')}}" class="logo logo-small">
            <img src="{{url('backend/assets/img/pre.png')}}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{ isset(Auth()->user()->image) ? url('uploads/uploads/students/' . Auth()->user()->image) : url('backend/assets/img/profiles/avatar-13.jpg') }}" width="31"
                        alt="{{auth()->user()->name}}"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ isset(Auth()->user()->image) ? url('uploads/uploads/students/' . Auth()->user()->image) : url('backend/assets/img/profiles/avatar-13.jpg') }}" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{auth()->user()->name}}</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{route('master.profile', Auth()->user()->id )}}">My Profile</a>
                <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
            </div>
        </li>
    </ul>
</div>
