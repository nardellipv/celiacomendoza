<footer id="footer" class="footer-6">
    <!-- Widget Section
    ============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-sm-12  col-md-12">
                    <div class="footer-widget-title">
                        <h5>Sobre celiacosmendoza.com</h5>
                    </div>
                </div><!-- .col-md-12 end -->
                <div class="col-xs-12  col-sm-12  col-md-4">
                    <div class="footer-widget-content">
                        <p class="mb-0">Queremos poder ofrecerle a los usuario una guía practica y simple para poder
                            comparar precios y buscar locales cercanos
                            a sus domicilios como también dar la posibilidad a los distintos comercios y productores
                            particulares de darse a conocer, llegar a mucha
                            más gente y dar visibilidad a sus productos.</p>
                        <div class="footer-widget-contact-link mt-md">
                            {{--                            <div class="col-xs-12  col-sm-12  col-md-6 mb-30-xs mb-30-sm">
                                                            <h6>Phone :</h6>
                                                            <p><i class="fa fa-phone"></i>+ 2 01065370701</p>
                                                            <p class="mb-0"><i class="fa fa-fax"></i>+ 2 01065370701</p>
                                                        </div>--}}
                            <div class="col-xs-12  col-sm-12  col-md-7">
                                <h6>Email :</h6>
                                <p class="mb-0"><i class="fa fa-envelope"></i>info@celiacosmendoza.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12  col-sm-12  col-md-8 widget-contact p-none-xs p-none-sm">
                    {!! Form::open(['method' => 'POST','route' => ['mailclient'],'style'=>'display:inline']) !!}
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-30" name="name" id="name"
                               placeholder="Nombre" required="" aria-required="true">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control mb-30" name="email" id="email"
                               placeholder="Email" required="" aria-required="true">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control mb-30" name="messageCustomer" id="message" rows="4"
                                  placeholder="Mensaje" required="" aria-required="true"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="submit-message" class="btn btn-primary btn-block">Enviar mensaje
                        </button>
                    </div>
                    <div class="col-xs-12  col-sm-12  col-md-12 mt-xs">
                    </div>
                    {!! Form::Close() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Social bar
    ============================================= -->
    <div class="footer-social">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-sm-12  col-md-12">
                    <div class="footer-social-bg">
                        <div class="footer-social-info pull-left pull-none-xs">
                            <p class="mb-0">Seguinos en nuestras redes</p>
                        </div>
                        <div class="footer-social-icon pull-right text-right pull-none-xs">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" href="#">
                                <i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div><!-- .footer-social-bg end -->
                </div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-social end -->

    <!-- Copyrights
    ============================================= -->
    <div class="footer-copyright pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  col-sm-12  col-md-12">
                    <div class="powered text-uppercase pull-left pull-none-xs mb-15-xs">
                        <p><span class="text-white">CeliacosMendoza</span> Design by <a href="https://mikant.com"
                                                                                        target="_blank">MikAnt</a></p>
                    </div>
                    <div class="copyright pull-right pull-none-xs">
                        <p class="text-capitalize">
                            <a href="privacy.html">Política de Privacidad</a> – <a href="terms.html">Términos y
                                condiciones</a>
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-copyright end -->
</footer>