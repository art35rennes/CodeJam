@extends('layouts.dashboard')

@section('page-name')
    - Ajout d'un nouveau batiment
@endsection

@section('content')
{{--TODO    Equipement can be add without add installations--}}
    <ul class="stepper" id="horizontal-stepper">
        <li class="step active">
            <div class="step-title waves-effect waves-dark">Etape 1 - Ajout d'un batiment</div>
            <div class="step-new-content">
                    <!-- Form -->
                <form class="form-data" id="batiment" method="POST" action="{{ route('batiments.store') }}">
                    <div class="form-row">
                        <div class="col-6">
                            <!-- name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control  @error('nom') is-invalid @enderror validate" name="nom" value="{{old('nom')}}" required>
                                <label for="materialRegisterFormFirstName">Nom</label>
                                @error('nom')
                                <span class="invalid-feed" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- desc -->
                    <div class="form-row">
                        <div class="md-form mt-0 col-8">
                            <textarea id="form7" class="validate md-textarea form-control @error('description') is-invalid @enderror" rows="3" name="description">{{old('description')}}</textarea>
                            <label for="form7">Description <span class="text-muted">(facultatif)</span></label>
                            @error('description')
                            <span class="invalid-feed" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="md-form mt-0 col-6">
                            <input type="text" id="geolocalisationB" class="validate form-control @error('geolocalisation') is-invalid @enderror" name="geolocalisation" value="{{old('geolocalisation')}}">
                            <label for="geolocalisationB">Géolocalisation <span class="text-muted">(facultatif)</span></label>
                            @error('geolocalisation')
                            <span class="invalid-feed" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div id="form-row">
                        <select name="ville" class="mdb-select md-form col-4">
                            <option value="" disabled selected>Choisissez un localisation</option>
                            <option value="1">Ville</option>
                            <option value="0">Campagne</option>
                        </select>
                    </div>
                </form>

                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feed="someFunction21">Suivant</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div class="step-title waves-effect waves-dark">Etape 2 - Ajout des installations</div>
            <div class="step-new-content">
                <div class="row">
                    <div class="md-form col-12 ml-auto">
                        <input id="number-horizontal" type="number" class="validate form-control">
                        <label for="number-horizontal">Nombre d'installation</label>
                    </div>
                </div>
                <div id="installation-form" class="row">

                </div>
                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">Précédent</button>
                    <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feed="someFunction21">Suivant</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div class="step-title waves-effect waves-dark">Etape 3 - Ajout des équipements</div>
            <div class="step-new-content">
                <table class="table table-responsive">
                    <thead>
                        <th>&nbsp;</th>
                        <th class="th-sm">Modèle</th>
                        <th class="th-sm">Référence</th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>


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
                            <input type="date" name="date_installation" id="date_installation" class="form-control modelForm">
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
                            <input type="number" name="puissance_nominale" id="puissance_nominale" class="form-control modelForm">
                            <label for="puissance_nominale">Puissance nominal</label>
                        </div>
                        <div class="md-form">
                            <input type="number" name="tension_nominale" id="tension_nominale" class="form-control modelForm">
                            <label for="tension_nominale">Tension nominal</label>
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
                <a class="btn blue-gradient" href="#" id="addModele">Ajouter</a>

                <div class="step-actions">
                    <button class="waves-effect waves-dark btn btn-sm btn-secondary previous-step">Précédent</button>
                    <button class="waves-effect waves-dark btn btn-sm btn-primary next-step" data-feed="someFunction21">Suivant</button>
                </div>
            </div>
        </li>
        <li class="step">
            <div class="step-title waves-effect waves-dark">Etape 4 - Récapitulatif</div>
            <div class="step-new-content">
                Finish!
                <div class="step-actions">
                    <button class="waves-effect waves-dark btn-sm btn btn-primary m-0 mt-4" type="button" id="submit-data">Envoyer</button>
                </div>
            </div>
        </li>
    </ul>

@endsection

@section('js')
    <!-- MDBootstrap Steppers Pro  -->
    <script type="text/javascript" src="{{URL::asset('/js/batiments/create.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/MDB/js/addons-pro/steppers.min.js')}}"></script>
@endsection
@section('css')
    <style>
        ul.horizontal-fix li a {
            padding: .84rem 2.14rem;
        }
    </style>
    <!-- MDBootstrap Steppers Pro  -->
    <link href="{{URL::asset('/MDB/css/addons-pro/steppers.min.css')}}" rel="stylesheet">
@endsection
