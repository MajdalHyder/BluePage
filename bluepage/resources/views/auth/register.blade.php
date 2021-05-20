@extends ('layouts.app')
@section('page_css')
    <link rel="stylesheet" href="{{asset('css/login_styles.css')}}"/>
@endsection

@section('content')
    <div class="login_box">
        <form action="{{ route('auth.create') }}" method="POST">
        {{csrf_field()}}
        <div>
            @if(Session::get('success'))
            <div>
                {{Session::get('success')}}
            </div>
            @endif

            @if(Session::get('fail'))
            <div>
                {{Session::get('fail')}}
            </div>
            @endif
        </div>
        <div>
            <label for="username">User name</label>
            <input type="text" name="username" placeholder="Uesr name">
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <div>
            <label for="role-select">Role</label>
            <select name="role" id="role-slect">
                <option value="">Select role</option>
                <option value="admin">admin</option>
                <option value="gestionnaire">gestionnaire</option>
                <option value="utilisateur">utilisateur</option>
            </select>
            <span>@error('username'){{$message}}@enderror</span>
        </div>
        <input type="submit" value="Register">
        </form>
    </div>
@endsection
