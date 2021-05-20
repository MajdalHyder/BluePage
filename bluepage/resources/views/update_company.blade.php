@extends('layouts.app_logged_in')

@section('page_css')
    <link rel="stylesheet" href="{{asset('css/create_company.css')}}"/>
@endsection


@section('content')
    <div class="container">
        <div>
            <h2>Modifier Entreprise</h2>
        </div>
        <form action="" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="{{ $company_info->nom }}"/>
            </div>
            <div>
                <label for="rue">Rue</label>
                <input type="text" name="rue" placeholder="{{ $company_info->rue }}"/>
            </div>
            <div>
                <label for="codePostal">Code postal</label>
                <input type="number" name="codePostal" placeholder="{{ $company_info->code_postal }}"/>
            </div>
            <div>
                <label for="ville">Ville</label>
                <input type="text" name="ville" placeholder="{{ $company_info->ville }}"/>
            </div>
            <div>
                <label for="numeroTelephone">N° Téléphone</label>
                <input type="number" name="numeroTelephone" placeholder="{{ $company_info->numero_telephone }}"/>
            </div>
            <div>
                <label for="email">Adresse E-mail</label>
                <input type="text" name="email" placeholder="{{ $company_info->email }}"/>
            </div>
            <input type="submit" value = "Sauvegarder">
        </form>
    </div>
@endsection