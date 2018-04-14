@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
             {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
                    
            <div class="panel panel-info chat-room">
                <div class="panel-heading">Chat Room</div>
                
                   <chat-log :messages="messages" :user="user"></chat-log>
                
                <div class="panel-footer">
                    <chat-composer v-on:messagesent="addMessage" v-on:loadmessage="getMessages"></chat-composer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
