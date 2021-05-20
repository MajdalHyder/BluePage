@extends ('layouts.app')
@section('page_css')
    <link rel="stylesheet" href="{{asset('css/users_dash.css')}}"/>
@endsection

@section('content')
    <div class="users_dash">
       <div class="title" >
           <h3>Users of</h3>
           <input type="button" value="Create new" action="" method="POST"/>
        </div> 
           <table>
                <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>N° tel</th>
                <th>Email</th>
                <th>Entreprise</th>
                <th>N° tel Entreprise</th>
                </tr>
                
            </table>
        </div>
    </div>
@endsection