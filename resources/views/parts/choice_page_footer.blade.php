<div class="footer-component-choose-page__wrapper">
    <div class="vnl__footer container-fluid footer-component-choose-page">
        <div class="footer__column choose-page__footer-second-wrapper">
            <div class="row footer-component-choose-page">
                <div class="col choose-user-role__element">
                    <div class="footer__org-info choose-role__footer">
                        <div class="row">
                            <div class="col choose-user-role__element p-0">
                                <a class="btn btn-link text-dark py-0" href="{{ setting('footer.about_us_address_link') }}">
                                    <div class="row flex-nowrap choose-page__footer__info">
                                        <div class="col-auto d-flex align-items-center">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="col text-left address-block">
                                            г.Минск
                                            <br class="info-line-break">
                                            ул.Шаранговича 19
                                            <br>
                                            {{ setting('footer.about_us_address_index') }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col choose-user-role__element choose-user-role__footer__about-us">
                    <h4>#Мы в социальных сетях</h4>
                    <div class="footer__contact-us">
                        {!! setting('footer.social_block') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>