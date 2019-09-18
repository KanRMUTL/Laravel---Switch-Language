<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="@lang('home.flag_path')" class="flag">

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">@lang('home.home_menu')</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">@lang('home.about_menu')</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">@lang('home.contact_menu')</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="locale/th"><img src="{{ asset('img/th_flag.png') }}" class="flag" >ภาษาไทย</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="locale/en"><img src="{{ asset('img/en_flag.png') }}" class="flag" >English</a>
                </li>
            </ul>
        </form>
    </div>
</nav>
