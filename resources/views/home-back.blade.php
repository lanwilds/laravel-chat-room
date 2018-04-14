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
                <div class="panel-body">

                    <div class="message message-usr-odd">
                        <div class="message-sender">
                            <h3>Jane Doe</h3>
                        </div>
                        <div class="message-text">Hello there... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                    
                    <div class="message message-usr-even">
                        <div class="message-sender">
                            <h3>John Doe</h3>
                        </div>
                        <div class="message-text">Hello ... cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                </div>
                <div class="panel-footer">
                    <form method="post">
                       <div class="input-group">
                        <input type="text" class="form-control input-message" placeholder="Enter something...">
                          <span class="input-group-btn">
                            <button class="btn btn-success" type="button">Send</button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
