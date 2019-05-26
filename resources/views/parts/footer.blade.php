<div class="footer-wrapper">
    <div class="vnl__footer container-fluid d-sm-flex justify-content-center">
        <div class="footer__column">
            <div class="row entity-page__footer-component__wrapper">
                <div class="col entity-page__footer-component__column">
                    <h4 class="footer-component__column__section-name">#О нас</h4>
                    <div class="footer__org-info">
                        <div class="row">
                            <div class="col p-0">
                                <a class="btn btn-link text-dark py-0"
                                   href="{{ setting('footer.about_us_address_link') }}">
                                    <div class="row flex-nowrap">
                                        <div class="col-auto d-flex align-items-center">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="col text-left">
                                            {{ setting('footer.about_us_address') }}
                                            <br> {{ setting('footer.about_us_address_index') }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col p-0">
                                <a class="btn btn-link text-dark py-0" href="tel:+375293080749">
                                    <div class="row flex-nowrap">
                                        <div class="col-auto">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="col">
                                            <span>{{ setting('footer.about_us_phone') }}</span>
                                            <div class="row">
                                                <div class="col text-right"><i class="fab fa-viber"></i>
                                                    <i class="fab fa-telegram"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="btn btn-link text-dark py-0"
                                   href="mailto:{{ setting('footer.about_us_email') }}">
                                    <div class="row flex-nowrap">
                                        <div class="col-auto">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="col">
                                            <span>{{ setting('footer.about_us_email') }}</span><br/>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col entity-page__footer-component__column hidden-sm">
                    <h4 class="footer-component__column__section-name">#Информация</h4>
                    @foreach(\TCG\Voyager\Models\Menu::where('name', '=', 'Footer menu')->first()->items as $menuItem)
                        <a class="btn btn-link d-block text-dark text-left"
                           href="{{ $menuItem->url }}">{{ $menuItem->title }}</a>
                    @endforeach
                    {{--                    <a href="#" class="btn btn-link d-block text-dark text-left"--}}
                    {{--                       data-izimodal-open="#decorate-modal-open" data-izimodal-zindex="20000"--}}
                    {{--                       data-izimodal-preventclose="">Оформление</a>--}}
                    {{--                    <a href="#" class="btn btn-link d-block text-dark text-left" data-izimodal-open="#faq-modal-open"--}}
                    {{--                       data-izimodal-zindex="20000" data-izimodal-preventclose="">Вопросы</a>--}}
                    {{--                    <a href="#" class="btn btn-link d-block text-dark text-left"--}}
                    {{--                       data-izimodal-open="#delivery-modal-open" data-izimodal-zindex="20000"--}}
                    {{--                       data-izimodal-preventclose="">Вес</a>--}}
                </div>
                <div class="col entity-page__footer-component__column">
                    <h4 class="footer-component__column__section-name">#Мы в социальных сетях</h4>
                    <div class="footer__contact-us">
                        {!! setting('footer.social_block') !!}
                    </div>
                </div>
            </div>

            <div class="row entity-page__footer-component__wrapper">
                <div class="entity-page__footer-component__column">
                    <h4 class="footer-component__column__section-name" style="text-align: center">#Реквизиты</h4>
                    <div class="footer__org-info">
                        <div class="col p-0" style="text-align: center">
                            {{ setting('footer.requisites') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>