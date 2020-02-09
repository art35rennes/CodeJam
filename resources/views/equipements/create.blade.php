@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos équipements
@endsection

@section('content')
    <div class="md-form form-row">
        <select id="model" class="mr-2 mdb-select md-form" searchable="Rechercher ici..">
            <option value="0" disabled selected>Choisissez un modéle</option>
            <option value="1">Marque - Référence</option>
            <option value="2">Marq - Réfce</option>>
            <option value="-1">Autre...</option>
        </select>
        <div id="type_table">
            <select id="type_table_select" class="mdb-select md-form" searchable="Rechercher ici..">
                <option value="0" disabled selected>Choisissez un type</option>
                <option value="1">Panneaux solaires</option>
                <option value="2">Batteries</option>
                <option value="-1">Inconnue</option>
            </select>
        </div>
    </div>
    <div id="equipement_div">
        <h5>Equipement</h5>
        <div class="form-row">
            {{--Equipement--}}
            <div class="md-form">
                <input type="date" name="date_installation" id="date_installation" class="form-control modelForm">4
                <label for="date_installation">Date d'installation</label>
            </div>
            <div class="md-form">
                <input type="text" name="geolocalisation" id="geolocalisation" class="form-control modelForm">
                <label for="geolocalisation">Geolocalisation</label>
            </div>
            <div class="md-form">
                <input type="number" name="orientation" id="orientation" class="form-control modelForm">
                <label for="orientation">Orientation</label>
            </div>
            <div class="md-form">
                <input type="number" name="elevation" id="elevation" class="form-control modelForm">
                <label for="elevation">Elevation</label>
            </div>
            <div class="md-form">
                <input type="number" name="inclinaison" id="inclinaison" class="form-control modelForm">
                <label for="inclinaison">Inclinaison</label>
            </div>
        </div>
    </div>
    <div id="modele_div">
        <h5>Modèle</h5>
        <div class="form-row">
            {{--Model--}}
            <div class="md-form">
                <input type="text" name="marque" id="marque" class="form-control modelForm">
                <label for="marque">Marque</label>
            </div>
            <div class="md-form">
                <input type="text" name="reference" id="reference" class="form-control modelForm">
                <label for="reference">Référence</label>
            </div>
            <div class="md-form">
                <input type="number" name="largeur" id="largeur" class="form-control modelForm">
                <label for="largeur">Largeur</label>
            </div>
            <div class="md-form">
                <input type="number" name="longueur" id="longueur" class="form-control modelForm">
                <label for="longueur">Longeur</label>
            </div>
            <div class="md-form">
                <input type="number" name="hauteur" id="hauteur" class="form-control modelForm">
                <label for="hauteur">Longeur</label>
            </div>
            <div class="md-form">
                <input type="number" name="poids" id="poids" class="form-control modelForm">
                <label for="poids">Poids</label>
            </div>
            <div class="md-form">
                <input type="number" name="rendement" id="rendement" class="form-control modelForm">
                <label for="rendement">Rendement</label>
            </div>
        </div>
    </div>
    <div id="ps_div">
        <h5>Caractéristique du panneaux solaire</h5>
        <div class="form-row">
            {{--Panneaux--}}
            <div class="md-form">
                <input type="number" name="puissance_nominal" id="puissance_nominal" class="form-control modelForm">
                <label for="puissance_nominal">Puissance nominal</label>
            </div>
            <div class="md-form">
                <input type="number" name="tension_nominal" id="tension_nominal" class="form-control modelForm">
                <label for="tension_nominal">Tension nominal</label>
            </div>
            <div class="md-form">
                <input type="number" name="tension_max" id="tension_max" class="form-control modelForm">
                <label for="tension_max">Tension max</label>
            </div>
            <div class="md-form">
                <input type="number" name="courant_max" id="courant_max" class="form-control modelForm">
                <label for="courant_max">Courant max</label>
            </div>
            <div class="md-form">
                <input type="number" name="tension_co" id="tension_co" class="form-control modelForm">
                <label for="tension_co">Tension court-ouvert</label>
            </div>
            <div class="md-form">
                <input type="number" name="courant_cc" id="courant_cc" class="form-control modelForm">
                <label for="courant_cc">Courant-court-ciruit</label>
            </div>
        </div>
    </div>
    <div id="cell_div">
        <h5>Caractéristique de la batterie</h5>
        <div class="form-row">
            {{--Batteries--}}
            <div class="md-form">
                <input type="number" name="tension_stockage" id="tension_stockage" class="form-control modelForm">
                <label for="tension_stockage">Tension</label>
            </div>
            <div class="md-form">
                <input type="number" name="capacite_stockage" id="capacite_stockage" class="form-control modelForm">
                <label for="capacite_stockage">Capacité</label>
            </div>
            <select class="mdb-select md-form modelForm" id="type" name="type">
                <option value="" disabled selected>Choisissez un type</option>
                <option value="plomb">Plomb</option>
                <option value="gel">Gel</option>
                <option value="lith-ion">Lith-ion</option>
            </select>
        </div>
    </div>
@endsection
