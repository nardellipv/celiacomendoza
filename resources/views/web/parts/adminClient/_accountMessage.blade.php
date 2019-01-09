@extends('web.adminClient')
@section('content')
    <section id="profile" class="p_b70 p_t70 bg_lightgry">
        <div class="container">
            @include('web.parts.alerts.success')
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
                                                        <a href="{{ url('cliente-perfil/leer-mensaje', $message->id) }}" class="list-box-user">
                                                <span class="name"> <i
                                                            class="fa fa-circle online"></i>{{ $message->name }}</span>
                                                        </a>
                                                        <a href="{{ url('cliente-perfil/leer-mensaje', $message->id) }}" class="list-box-content">
                                                            @if($message->read == 'YES')
                                                                <div class="message-text-read">
                                                            @else
                                                                <div class="message-text">
                                                            @endif
                                                                {{ str_limit($message->message,100) }}
                                                                </div>
                                                                <div class="time text-muted">{{ Date::parse($message->created_at)->format('d/m/Y H:m') }}</div>
                                                        </a>
                                                        <div class="list-box-action">

                                                            {!! Form::open(['method' => 'DELETE','route' => ['deletemessage', $message->id],'style'=>'display:inline']) !!}
                                                            {{Form::token() }}
                                                            <button type="submit" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="Borrar Mensaje" class="btn btn-link">
                                                                <i class="fa fa-trash fa-2x"></i></button>
                                                            {!! Form::Close() !!}
                                                        </div>
                                                    </div>
                                                @endforeach
                                                    <div class="pagination-bar">
                                                        <nav aria-label="Page navigation " class="d-inline-b">
                                                            {!! $messages->render() !!}
                                                        </nav>
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
    </section>
@endsection
