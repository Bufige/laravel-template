@extends('layouts.master')

@section('title')
Reset password
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-control">
            <div class="text-center">
                Reset Password
                <br>
                <br>
                <br>
            </div>
            <div class="col-sm-12 offset-lg-1">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-4 text-center">
                            <button type="submit" class="btn btn-primary">
                            Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection