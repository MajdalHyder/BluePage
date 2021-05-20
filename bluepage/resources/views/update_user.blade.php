@extends('layouts.app_logged_in')

@section('page_css')
    <link rel="stylesheet" href="{{asset('css/create_user.css')}}"/>
@endsection

@section('content')
    <div class="container">
    <div>
    <h2>Modifier collaborateur</h2>
    </div>    
    <form action="" method="POST">
            <div class="radios">
                <label for="civilite">Civilité</label>
                <div>
                    <div>
                        <label for="homme">H</label>
                        <input id="homme" name="civilite" type="radio" value="Homme">
                    </div>
                    <div>
                        <label for="femme">F</label>
                        <input id="femme" name="civilite" type="radio" value="Femme">
                    </div>
                    <div>
                        <label for="nonbinaire">N</label>
                        <input id="nonbinaire" name="civilite" type="radio" value="Non-binaire">
                    </div>
                </div>
            </div>
            <div>
                <label for="nom">Nom*</label>
                <input type="text" name="nom" placeholder="Nom"/>
            </div>
            <div>
                <label for="prenom">Prénom*</label>
                <input type="text" name="prenom" placeholder="Prénom"/>
            </div>
            <div>
                <label for="rue">Rue*</label>
                <input type="text" name="rue" placeholder="Rue"/>
            </div>
            <div>
                <label for="codePostal">Code postal*</label>
                <input type="number" name="codePostal" placeholder="Code postal"/>
            </div>
            <div>
                <label for="ville">Ville*</label>
                <input type="text" name="ville" placeholder="Ville"/>
            </div>
            <div>
                <label for="numeroTelephone">N° Téléphone</label>
                <input type="number" name="numeroTelephone" placeholder="Numéro de téléphone"/>
            </div>
            <div>
                <label for="email">Adresse E-mail*</label>
                <input type="text" name="email" placeholder="Adresse E-mail"/>
            </div>
            <div>
                <label for="entreprise">Entreprise*</label>
                <input type="text" name="entreprise" placeholder="entreprise"/>
            </div>
            <input type="submit" value = "Sauvegarder">
        </form>
    </div>
@endsection