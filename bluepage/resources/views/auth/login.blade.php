@extends ('layouts.app')
@section('page_css')
    <link rel="stylesheet" href="{{asset('css/login_styles.css')}}"/>
@endsection

@section('content')
    <div class="login_box">
        <form action="{{ route('auth.check') }}" method="POST">
        {{csrf_field()}}
        <div>
            <label for="login">Login</label>
            <input type="text" name="username" placeholder="Uesr name">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" value="Login">
        </form>
    </div>
@endsection
