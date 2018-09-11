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
                                        @foreach($messages as $message)
                                            <div class="list-group-item">
                                                <a href="account-message-details.html" class="list-box-user">
                                                <span class="name"> <i
                                                            class="fa fa-circle online"></i>{{ $message->name }}</span>
                                                </a>
                                                <a href="account-message-details.html" class="list-box-content">
                                                    <div class="message-text  ">
                                                        {{ str_limit($message->message,100) }}
                                                    </div>
                                                    <div class="time text-muted">{{ Date::parse($message->created_at)->format('d/m/Y H:m') }}</div>
                                                </a>
                                                <div class="list-box-action">
                                                    <a data-toggle="tooltip" data-placement="top" title="Delete ">
                                                        <i class=" fas fa-trash"></i></a>
                                                    <a class="markAsRead" data-toggle="tooltip" data-placement="top"
                                                       title="Mark as read "> <i class=" fas fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
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
