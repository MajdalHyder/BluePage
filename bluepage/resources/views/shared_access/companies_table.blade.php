@extends ('layouts.app_logged_in')
@section('page_css')
    <link rel="stylesheet" href="{{asset('css/users_dash.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('content')
    <div class="users_dash">
       <div class="title" >
           <h3 href="{{ route('create_company') }}">List of companies</h3>
           @if ($data['LoggedUserInfo']['role'] == 'admin')
           <input type="button" value="Create new" onclick="window.location='{{ route("create_company") }}' "/>
           @endif
        </div> 
           <table class="table table-hover">
               <thead>
                <tr>
                <th scope="col">Nom</th>
                <th scope="col">N° tel</th>
                <th scope="col">Email</th>
                <th scope="col">Code postale</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($companies_table_data as $company)
                    <tr>
                        <th scope="row"><a style="text-decoration:none;color:#fff;" href="{{ route('company_details', $company->id) }}">{{ $company->nom }}</a></th>
                        <td>{{ $company->numero_telephone }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->code_postal }}</td>
                        <td>
                            <div>
                            @if ($data['LoggedUserInfo']['role'] == 'admin' || $data['LoggedUserInfo']['role'] == 'gestionnaire')
                                <a href="{{ route('update_company', $company->id) }}">Update</a>
                            @endif
                            @if ($data['LoggedUserInfo']['role'] == 'admin')
                                <a href="#">Delete</a>
                            @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection