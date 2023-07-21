<div class="navbar-mobile">
    <div class="navbar-mobile__body d-flex flex-column">
        <div class="navbar-mobile__header navbar-mobile__block d-flex justify-content-end align-items-center">
            <i class="fa-solid fa-xmark" id="close-burger" style="font-size: 30px;"></i>
        </div>
        <div class="navbar-mobile__content navbar-mobile__block mt-5">
            <div class="d-flex">
                <a href="{{url('/')}}" style="color:white">
                    <span class="icon">
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </span>
                </a>
                <div style="padding-left:15px;padding-right:15px;" class="d-flex align-items-center">
                    <a href="{{url('/')}}" style="text-decoration:none;color:white"><span style="font-size:20px;font-weight:300;">Strona Główna</span></a>
                </div>
            </div>
            <div class="d-flex mt-5">
                <a href="{{url('/ustawienia')}}" style="color:white"><span class="icon"><i class="fas fa-cog" aria-hidden="true"></i></span></a>
                <div style="padding-left:15px;padding-right:15px;" class="d-flex align-items-center">
                    <a href="{{url('/ustawienia')}}" style="text-decoration:none;color:white"><span style="font-size:20px;font-weight:300;">Ustawienia</span></a>
                </div>
            </div>
            <div class="d-flex mt-5">
                <a href="{{route('logout')}}" style="color:white"><span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span></a>
                <div style="padding-left:15px;" class="d-flex align-items-center">
                    <a href="{{route('logout')}}" style="text-decoration:none;color:white"><span style="font-size:20px;font-weight:300;"> Wyloguj się </span></a>
                </div>
            </div>
        </div>
        <div class="navbar-mobile__footer navbar-mobile__block">
            <div id="navbarL" class="">
                <p style="font-size:18px;font-weight:600;">Jesteś w panelu: </p>
                <p style="font-size:18px;font-weight:300;">Panel Główny</p>
            </div>

            <div id="navbarR" class="mt-4">
                <p style="font-size:18px;font-weight:300;">Mamy dziś:&nbsp;
                    15-07-2023, miłego dnia!
                </p>
            </div>
        </div>
    </div>
</div>
<div id="header" class="d-flex justify-content-between align-items-center">

    <div id="header-lewy" class="d-flex align-items-center">
        <img src="/userfiles/userphoto/default.jpg" style="width:54px;height:54px;border:3px solid #ffffff;border-radius:60px;">
        <div id="header-lewy-dane" class="d-flex flex-column">
            <p style="font-size:18px;font-weight:300;line-height:20px;"><a style="color:white;text-decoration: none">Zalogowany jako:</a></p>
            <p style="font-size:26px;font-weight:600;line-height:28px;"><a style="color:white;text-decoration: none">Test Test</a></p>
        </div>
    </div>

    <div id="header-prawy__desktop">

        <div class="d-flex header-prawy__desktop_btn">
            <a href="{{url('/')}}" style="color:white">
                <span class="icon">
                    <i class="fas fa-home" aria-hidden="true"></i>
                </span>
            </a>
            <div style="padding-left:15px;padding-right:15px;" class="d-flex align-items-center">
                <a href="{{url('/')}}" style="text-decoration:none;color:white"><span style="font-size:18px;font-weight:300;">Strona Główna</span></a>
            </div>
        </div>
        <div class="d-flex header-prawy__desktop_btn">
            <a href="{{url('/ustawienia')}}" style="color:white"><span class="icon"><i class="fas fa-cog" aria-hidden="true"></i></span></a>
            <div style="padding-left:15px;padding-right:15px;" class="d-flex align-items-center">
                <a href="{{url('/ustawienia')}}" style="text-decoration:none;color:white"><span style="font-size:18px;font-weight:300;">Ustawienia</span></a>
            </div>
        </div>
        <div class="d-flex header-prawy__desktop_btn">
            <a href="{{route('logout')}}" style="color:white" onclick="event.preventDefault();document.querySelector('#logout-form').submit()"><span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span></a>
            <div style="padding-left:15px;" class="d-flex align-items-center">
                <a href="{{route('logout')}}" style="text-decoration:none;color:white"><span style="font-size:18px;font-weight:300;" onclick="event.preventDefault();document.querySelector('#logout-form').submit()"> Wyloguj się </span></a>
            </div>
        </div>
        <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">@csrf</form>

    </div>

    <div id="header-prawy__mobile">
        <div class="d-flex" id="burger">
            <a style="color:white"><span class="icon"><i class="fas fa-bars" aria-hidden="true"></i></span></a>

        </div>

        <div class="d-flex">
            <a href="{{route('logout')}}" style="color:white"><span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></span></a>

        </div>

    </div>
</div>
<div id="navbar" class="d-flex justify-content-between">

    <div id="navbarL" class="d-flex">
        <p style="font-size:18px;font-weight:600;">Jesteś w panelu: </p>
        <p style="font-size:18px;font-weight:300;padding-left:15px;">Panel Główny</p>
    </div>

    <div id="navbarR">
        <p style="font-size:18px;font-weight:300;">Mamy dziś:&nbsp;
            15-07-2023, miłego dnia!
        </p>
    </div>


</div>

