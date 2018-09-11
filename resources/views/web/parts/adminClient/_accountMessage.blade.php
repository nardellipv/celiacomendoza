@extends('web.adminClient')
@section('content')
    <div class="row">
        <div class="col-md-3 page-sidebar">
            @include('web.parts.adminClient._aside')
        </div>
        <div class="col-md-9 page-content">
            <div class="inner-box">
                <h2 class="title-2"><i class="icon-mail"></i> Mensajes </h2>
                <div class="inbox-wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="message-list">
                                <div id="home">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <a href="account-message-details.html" class="list-box-user">
                                                <span class="name"> <i
                                                            class="fa fa-circle online"></i>Parrish Zamora </span>
                                            </a>
                                            <a href="account-message-details.html" class="list-box-content">
                                                <span class="title">Is this item still available ?</span>
                                                <div class="message-text  ">
                                                    Hi, how are you ? Donec imperdiet leo ac ipsum blandit auctor
                                                </div>
                                                <div class="time text-muted">2018-03-19 03:08pm</div>
                                            </a>
                                            <div class="list-box-action">
                                                <a data-toggle="tooltip" data-placement="top" title="Delete ">
                                                    <i class=" fas fa-trash"></i></a>
                                                <a class="markAsRead" data-toggle="tooltip" data-placement="top"
                                                   title="Mark as read "> <i class=" fas fa-envelope"></i></a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
