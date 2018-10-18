@extends('layouts.head')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hi, {{ Auth::user()->name }}</div>

                <div class="panel-body">
                        <div class="alert alert-success">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">

                                        <div class="panel-body">
                                            <form class="form-horizontal" method="POST" action="">
                                                {{ csrf_field() }}

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-4 control-label">Name</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Phone</label>

                                                    <div class="col-md-6">
                                                        <input id="Phone" type="text" class="form-control" value ="{{Auth::user()->phone }}"name="phone" required>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Height</label>

                                                    <div class="col-md-6">
                                                        <input id="height" type="text" class="form-control" value ="{{Auth::user()->height }}"name="height" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Waist</label>

                                                    <div class="col-md-6">
                                                        <input id="Waist" type="text" class="form-control" value ="{{Auth::user()->waist }}" name="waist" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Bust</label>

                                                    <div class="col-md-6">
                                                        <input id="Bust" type="text" class="form-control" value ="{{Auth::user()->bust }}" name="bust" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Hips</label>

                                                    <div class="col-md-6">
                                                        <input id="Hips" type="text" class="form-control"value ="{{Auth::user()->hips }}"  name="hips" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Shoes</label>

                                                    <div class="col-md-6">
                                                        <input id="Shoes" type="text" class="form-control" value ="{{Auth::user()->shoes }}"  name="shoes" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Eyes</label>

                                                    <div class="col-md-6">
                                                        <input id="eyes" type="text" class="form-control" value ="{{Auth::user()->eyes }}"  name="eyes" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Hair</label>

                                                    <div class="col-md-6">
                                                        <input id="Hair" type="text" class="form-control" value ="{{Auth::user()->hair }}"  name="hair" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-md-4 control-label">Size</label>

                                                    <div class="col-md-6">
                                                        <input id="Size" type="text" class="form-control" value ="{{Auth::user()->size }}" name="size" required>

                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Change Info
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
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
