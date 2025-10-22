<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{route('main')}}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{asset('/img/hospital.png')}}" alt="" style="width: 60px; height: 60px; !important;" class="logo logo-lg"/>
                <img src="{{asset('/img/hospital.png')}}" alt="" class="logo logo-sm"/>
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{route('profile')}}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Profil</span><span class="nxl-arrow"></span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('ai.chat') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layout"></i></span>
                        <span class="nxl-mtext">AI tibbiy yordamchi</span><span class="nxl-arrow"></span>
                    </a>
                </li>
{{--                <li class="nxl-item nxl-hasmenu">--}}
{{--                    <a href="{{ route('chats', auth()->user()->id) }}" class="nxl-link">--}}
{{--                        <span class="nxl-micon"><i class="feather-layout"></i></span>--}}
{{--                        <span class="nxl-mtext">Chat</span><span class="nxl-arrow"></span>--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>
</nav>
