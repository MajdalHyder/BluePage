@extends('layouts.app_logged_in')

@section('page_css')
    <link rel="stylesheet" href="{{asset('css/create_company.css')}}"/>
@endsection


@section('content')
    <div class="container">
        <div>
            <h2>Nouvelle Entreprise</h2>
        </div>
        <form action="{{ route('create_new_company') }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Nom"/>
            </div>
            <div>
                <label for="rue">Rue</label>
                <input type="text" name="rue" placeholder="Rue"/>
            </div>
            <div>
                <label for="codePostal">Code postal</label>
                <input type="number" name="codePostal" placeholder="Code postal"/>
            </div>
            <div>
                <label for="ville">Ville</label>
                <input type="text" name="ville" placeholder="Ville"/>
            </div>
            <div>
                <label for="numeroTelephone">N° Téléphone</label>
                <input type="number" name="numeroTelephone" placeholder="Numéro de téléphone"/>
            </div>
            <div>
                <label for="email">Adresse E-mail</label>
                <input type="text" name="email" placeholder="Adresse E-mail"/>
            </div>
            <input type="submit" value = "Sauvegarder">
        </form>
    </div>
@endsection