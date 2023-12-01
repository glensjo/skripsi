@extends('layouts.guest')
@section('content')

<h2><br><br><br><br>Log In</h2>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/login/process">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= empty(Request::cookie('cookieUser')) ? '' : Request::cookie('cookieUser'); ?>">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?= empty(Request::cookie('cookiePass')) ? '' : Request::cookie('cookiePass'); ?>">
        </div>

        <!-- <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" name="remember" <?= empty(Request::cookie('cookieUser')) ? '' : 'checked'; ?>> Remember Me</label>
        </div> -->

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

@endsection