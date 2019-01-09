<div class="details-heading heading">
    <h2 class="p_b40">Un poco sobre <span>Nosotros</span></h2>
    <p>{{ $commerce->about }}</p>
    <ul class="social-register-icon">
        @if($commerce->facebook)
        <li><a href="https://www.facebook.com/{{ $commerce->facebook }}" target="_blank"><i class="fa fa-facebook"></i>
                Facebook</a>
        </li>
        @endif
    </ul>
</div>