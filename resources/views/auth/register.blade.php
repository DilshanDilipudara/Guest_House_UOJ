@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('Uname') ? ' has-error' : '' }}">
                            <label for="Uname" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="Uname" type="text" class="form-control" name="Uname" value="{{ old('Uname') }}" required autofocus>

                                @if ($errors->has('Uname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Uname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                            <label for="Email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="Email" type="Email" class="form-control" name="Email" value="{{ old('Email') }}" required>

                                @if ($errors->has('Email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Empno') ? ' has-error' : '' }}">
                            <label for="Empno" class="col-md-4 control-label">Employee Number</label>

                            <div class="col-md-6">
                                <input id="Empno" type="Empno" class="form-control" name="Empno" value="{{ old('Empno') }}" required>

                                @if ($errors->has('Empno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Nicno') ? ' has-error' : '' }}">
                            <label for="Nicno" class="col-md-4 control-label">NIC Number</label>

                            <div class="col-md-6">
                                <input id="Nicno" type="Nicno" class="form-control" name="Nicno" value="{{ old('Nicno') }}" required>

                                @if ($errors->has('Nicno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nicno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="gender" type="gender" class="form-control" name="gender" value="{{ old('gender') }}" required>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="faculty" class="col-md-4 control-label">Faculty</label>

                            <div class="col-md-6">
                                <input id="faculty" type="faculty" class="form-control" name="faculty" value="{{ old('faculty') }}" required>

                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Department') ? ' has-error' : '' }}">
                            <label for="Department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-6">
                                <input id="Department" type="Department" class="form-control" name="Department" value="{{ old('Department') }}" required>

                                @if ($errors->has('Department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Position') ? ' has-error' : '' }}">
                            <label for="Position" class="col-md-4 control-label">Position</label>

                            <div class="col-md-6">
                                <input id="Position" type="Position" class="form-control" name="Position" value="{{ old('Position') }}" required>

                                @if ($errors->has('Position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Pno') ? ' has-error' : '' }}">
                            <label for="Pno" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="Pno" type="Pno" class="form-control" name="Pno" value="{{ old('Pno') }}" required>

                                @if ($errors->has('Pno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Pno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
