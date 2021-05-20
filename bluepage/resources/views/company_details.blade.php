@extends('layouts.app_logged_in')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/create_company.css')}}"/>
@endsection


@section('content')
    <div class="container">
        <div>
            <h2 style="margin-top:0;">Détails Entreprise</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Nom</th>
                        <td>{{$company_info->nom }}</td>
                    </tr>
                    <tr>
                        <th>Rue</th>
                        <td>{{$company_info->rue }}</td>
                    </tr>
                    <tr>
                        <th>Code postal</th>
                        <td>{{$company_info->code_postal }}</td>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <td>{{$company_info->ville }}</td>
                    </tr>
                    <tr>
                        <th>N° Téléphone</th>
                        <td>{{$company_info->numero_telephone }}</td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td>{{$company_info->email }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </div>
@endsection