<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts._head')
<body>

<!-- LOADER -->
<div class="loader">
    <div class="cssload-svg"><img src="{{ asset('webStyle/img/42-3.gif') }}" alt="image">
    </div>
</div>
<!--LOADER-->

<!-- HEADER -->
@include('web.parts._header')

<!-- Inner Banner -->
<section id="inner-banner-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="inner_banner_2_detail">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Popular Listing -->
@yield('content')
<!-- Popular Listing -->

<!-- Footer -->
@include('web.parts._footer')
<!-- Footer -->

@include('layouts._scripts')
</body>

</html>