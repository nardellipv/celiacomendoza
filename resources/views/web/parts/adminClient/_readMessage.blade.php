@extends('web.adminClient')
@section('content')
    <section id="profile" class="p_b70 p_t70 bg_lightgry">
        <div class="container">
            <div class="row">
                <div class="col-md-3 page-sidebar">
                    @include('web.parts.adminClient._aside')
                </div>
                <!--/.page-sidebar-->
                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <h2 class="title-2"><i class="fa fa-envelope-open"></i> Leer Mensaje </h2>
                        <div class="inbox-wrapper">
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <div class="btn-group hidden-sm">
                                        <a href="{{ url('cliente-perfil/responder-mensaje', $message->id) }}" class="btn btn-primary text-uppercase"
                                        ><i class="fa fa-plus"></i> Responder
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-9 col-lg-10 ">
                                    <div class="user-bar-top">
                                        <div class="user-top-comp">
                                            <div class="col m-0 p-0">
                                                <label class="sr-only" for="inlineFormInputGroup"> </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">De:</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                                           value="{{ $message->name }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 chat-row">
                                    <div class="message-compose">

                                        <div class="type-form">
                                            <div class="panel-body">
                                                {{ $message->message }}
                                            </div>
                                        </div>

                                        <div class="type-form-footer">
                                            {!! Form::open(['method' => 'DELETE','route' => ['deletemessage', $message->id],'style'=>'display:inline']) !!}
                                            {{ Form::token() }}
                                            <button type="submit" class="btn btn-default btn-icon">
                                                Eliminar
                                                <i class="fas fa-trash-alt"></i> </button>
                                            {!! Form::Close() !!}
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