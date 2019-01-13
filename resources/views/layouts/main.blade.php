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

<!-- Popular Listing -->
@include('web.parts._login')

<section id="popular-listing" class="p_b70 p_t70">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-9 col-xs-12">
                <h4>LISTADO DE LOCALES Y VENDEDORES</h4>
                <br>

                <!-- listado de locales -->
                @include('web.parts._companies')
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 listing-rightbar">
                @include('web.parts._region')
            </div>

        </div>
    </div>
</section>

@include('web.parts._features')

@include('web.parts._lastBlog')

@include('web.parts._contactClient')
<!-- Footer -->
@include('web.parts._footer')
<!-- Footer -->
@include('layouts._scripts')
</body>

</html>