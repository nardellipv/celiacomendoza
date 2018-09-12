@extends('web.adminClient')
@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 page-sidebar">
                    @include('web.parts.adminClient._aside')
                </div>
                <!--/.page-sidebar-->
                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <h2 class="title-2"><i class="fas fa-edit"></i> Responder Mensaje </h2>
                        {!! Form::open(['method' => 'POST','route' => ['responsMessageCliente', $message->id]]) !!}
                        {{ csrf_field() }}
                        <div class="inbox-wrapper">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 ">
                                    <div class="user-bar-top">
                                        <div class="user-top-comp">
                                            <div class="col m-0 p-0">
                                                <label class="sr-only" for="inlineFormInputGroup"> </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">A:</div>
                                                    </div>
                                                    <input type="text" class="form-control" name="name"
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
                                            <p>Mensaje Original</p>
                                            <div style=" background-color: #eceeef; font-size:  12px; text-align:  justify; margin-bottom: 15px;">
                                                {{ $message->message }}
                                            </div>
                                                <textarea class="form-control" name="messageCustomer" rows="3"></textarea>
                                        </div>

                                        <div class="type-form-footer">
                                            <button type="submit" class="btn btn-success btn-icon">
                                                Enviar
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::Close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection