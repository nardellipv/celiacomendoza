<div class="header">
    <nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
         role="navigation">
        <div class="container">
            <div class="navbar-identity">
                <a href="{{ url('/') }}" class="navbar-brand logo logo-title">
    			<img src="{{ asset('webStyle/img/logo-text.png') }}" alt="logo" style="margin-top: -15px;">
    			</a>
            </div>
            @include('web.parts._menu')
        </div>
    </nav>
</div>