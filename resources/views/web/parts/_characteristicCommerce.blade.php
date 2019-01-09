<div class="details-heading heading">

    <h2 class="p_b20">Más información de <span>{{ $commerce->name }}</span></h2>

    <div class="panel-group m_t40" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">

            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                       aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                        Medios de pago
                    </a>
                </h4>
            </div>

            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    @foreach($commercePayment as $payment)
                        <img src="{{ asset($payment->payment->photo) }}" style="width: auto;">&nbsp;&nbsp;
                    @endforeach
                </div>
            </div>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo"
                       aria-expanded="false" aria-controls="collapsetwo" class="collapsed">
                        Caracteristicas
                    </a>
                </h4>
            </div>

            <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"
                 aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    @foreach($characteristicCommerces as $characteristicCommerce)
                        <img src="{{ asset($characteristicCommerce->characteristic->photo) }}"
                             style="width: auto;"> {{ $characteristicCommerce->characteristic->name }} &nbsp;&nbsp;
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>