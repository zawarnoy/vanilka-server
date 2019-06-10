<nav class="navbar navbar-expand-lg navbar-light header__container-fluid d-flex justify-content-sm-center mb-4">
    <div class="container vnl__container">
        @php($menuItems = \App\FrontendMenuItem::all())
        <div class="d-none d-lg-block w-100">
            <ul class="navbar-nav w-100">

                @if (Route::currentRouteName() == 'choice')
                    <li class="nav-item col-auto p-0">
                        <a href="{{route('main')}}" class="btn btn-primary p-0 w-100 icon-link" data-toggle="tooltip"
                           data-placement="bottom" title="Главная страница">
                            <i class="fas fa-home fa-2x"></i>
                        </a>
                    </li>
                @else
                    <li class="nav-item col-auto p-0">
                        <a href="{{route('choice')}}" class="btn btn-primary p-0 w-100" data-toggle="tooltip"
                           data-placement="bottom" title="Страница выбора">
                            <i class="fas fa-arrow-alt-circle-left fa-2x"></i>
                        </a>
                    </li>
                @endif

                <li class="nav-item col p-0">

                    <a href="{{ $menuItems[0]->link }}" class="btn btn-primary p-0 w-100">
                        <h2 class="d-none d-sm-inline-block header__item">
                            {{ $menuItems[0]->title }}<br>&nbsp;
                        </h2>
                    </a>
                </li>

                <li class="nav-item col-auto p-0">
                    <span class=" icon icon__delimiter"></span>
                </li>

                <li class="nav-item col p-0">
                    <a href="{{ $menuItems[1]->link }}" class="btn btn-primary p-0 w-100">
                        <span class="d-none d-lg-inline-block header__item">
                            <h2 style="line-height: 15px">
                                {{ $menuItems[1]->title }}
                            </h2>
                            <h4>{{ $menuItems[1]->caption }}</h4>
                        </span>
                        <h3 class="d-lg-none">{{ $menuItems[1]->mobileTitle }}</h3>
                    </a>
                </li>

            </ul>
        </div>

        <a class="navbar-brand col-auto mx-auto p-0" href="{{ route('choice') }}">
            <i class="icon icon__xl icon__logo_full"></i>
        </a>
        <button class="navbar-toggler position-absolute" style="top:40px" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
            <ul class="navbar-nav w-100">
                <li class="d-block d-lg-none nav-item">
                    <a class="btn btn-primary p-0 w-100 text-left" href="{{ route('main') }}">
                        <h3>Главная страница</h3>
                    </a>
                </li>
                <li class="d-block d-lg-none nav-item">
                    <a class="btn btn-primary p-0 w-100 text-left" href="{{ route('showcase.stuffing') }}">
                        <h3>Начинки</h3>
                    </a>
                </li>
                <li class="d-block d-lg-none nav-item">
                    <a class="btn btn-primary p-0 w-100 text-left" href="{{ route('gallery.cakes') }}">
                        <h3>Галлерея тортов</h3>
                    </a>
                </li>

                <li class="nav-item col-lg p-0">
                    <a href="{{ $menuItems[2]->link }}" class="btn btn-primary p-0 w-100 text-left text-lg-center">
                        <span class="d-none d-lg-inline-block header__item">
                            <h2 style="line-height: 15px">{{ $menuItems[2]->title }}</h2>
                            <h4>{{ $menuItems[2]->caption }}</h4>
                        </span>
                        <h3 class="d-lg-none">{{ $menuItems[2]->mobileTitle }}</h3>
                    </a>
                </li>

                <li class="nav-item col-auto d-none d-lg-block">
                    <span class=" icon icon__delimiter"></span>
                </li>
                <li class="nav-item col-lg p-0">
                    <a href="{{ $menuItems[3]->link }}" class="btn btn-primary p-0 w-100 text-left text-lg-center">
                        <h2 class="d-none d-lg-inline-block header__item">{{ $menuItems[3]->title }}<br></h2>
                        <h3 class="d-lg-none">{{ $menuItems[3]->mobileTitle }}</h3>
                    </a>
                </li>

                <li class="nav-item col-lg-auto p-0">
                    <a href="#faq-modal-open" class="btn btn-primary p-0 w-100 text-left text-lg-center icon-link"
                       data-toggle="tooltip" data-placement="bottom" title="Вопросы/Ответы">
                        <i class="d-none d-lg-inline-block fas fa-question-circle fa-2x"></i>
                        <h3 class="d-lg-none">Вопросы и ответы</h3>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
