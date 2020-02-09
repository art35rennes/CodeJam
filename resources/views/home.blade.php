@extends('layouts.dashboard')
@section('page-name')
    - Dashboard
@endsection
@section('content')
    <div class="container-fluid mt-1">
        {{--General stat--}}
        <section id="recap">
            <h4>Récapitulatif</h4>
            <div class="row text-center">
{{--                @for($i = 0; $i < 4; $i++)--}}
{{--                ENERGIE VERTE--}}
                <div class="col-lg-6 col-xl-3 col-sm-5 mb-2 text-center ">
                    <!-- Summary -->
                    <p>Production total: <strong>9.8 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production total de vos équipements sur la journée en cours"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Production actuel: <strong>1.3 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production cumulé de tout vos équipements"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="52"><span class="percent">52</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge green  p-2">Production d'energie verte <i class="fas fa-arrow-circle-up ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production en hausse par rapport à hier"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>

{{--                HYDRO--}}
                <div class="col-lg-6 col-xl-3 col-sm-5 mb-2 text-center ">
                    <!-- Summary -->
                    <p>Consommation total: <strong>2.3 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consommation total issue de Hydro Quebec aujourd'hui"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Consommation actuel: <strong>0.7 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consommation actuel issue du réseau Hydro Quebec"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="28"><span class="percent">28</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge blue accent-2 p-2">Consommation Hydro Quebec <i class="fas fa-arrow-circle-down ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Consomation en baisse par rapport à hier"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>

{{--                BATTERIE--}}
                <div class="col-lg-6 col-xl-3 col-sm-5 mb-2 text-center ">
                    <!-- Summary -->
                    <p>Niveau de charge: <strong>67%</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production total sur la journée en cours"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Production actuel: <strong>0.5 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Se décharge actuellement pour alimenter vos appareils"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="20"><span class="percent">20</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge red accent-2 p-2">Statue des batteries <i class="fas fa-equals ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Niveau moyen des batteries similaire à hier"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>
                {{--                BATTERIE--}}
                <div class="col-lg-6 col-xl-3 col-sm-5 mb-2 text-center ">
                    <!-- Summary -->
                    <p>Note moyenne des utilisateurs: <strong>57%</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vous pouvez encore vous améliorer !"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Nombre d'installations: <strong>8</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Le nombre d'installations, leurs taille, leurs composition et leurs localisation influe sur votre note"><i class="fas fa-question"></i></button>
                    </p>
                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="46"><span class="percent">46</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge orange accent-2 p-2">Note environementale</span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Votre note est basé sur l'impact de vos installations et les solutions mit en place"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>

{{--                @endfor--}}

            </div>
        </section>
        <hr>
        <section id="installations" class="mt-2">
            <h4>Installations</h4>
            <div class="row">
{{--                @for($i=0; $i<4; $i++)--}}
                <div class=" col-lg-12 col-xl-6 mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Panneaux Solaire 80MW</h4>
                    <!-- Text -->
                    <p class="card-text mb-4"><a href="{{route('batiments.show', ['batiment'=>1])}}">Pavillon principale</a> - Panneaux solaire toit nord-est - 2015-07-15</p>
                    <!-- Card -->
                        <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="install1"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">


                            <div class="row mb-0">
                                <!-- First column -->
                                <div class="col-md-12">

                                    <table class="table mdDataTable w-100">

                                        <!-- Table head -->
                                        <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th class="th-sm">Equipement</th>
                                            <th class="th-sm">Puissance Nominal</th>
                                            <th class="th-sm">Production actuel</th>
                                            <th class="th-sm">Journée</th>
                                            <th class="th-sm">Semaine</th>
                                            <th class="th-lg">Statue</th>
                                            <th class="th-sm">Date d'installation</th>
                                            <th class="th-sm fit">&nbsp;</th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>30 MW</td>
                                            <td>13 MW</td>
                                            <td>30 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>99 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>

                                        <tr>
                                            <td>Batterie</td>
                                            <td>1 MW</td>
                                            <td>-2.7 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>En&nbsp;charge&nbsp;<span class="badge success-color" data-toggle="tooltip" data-original-title="Chargée à 97%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>3 MW</td>
                                            <td>0 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Chargé&nbsp;<span class="badge secondary-color" data-toggle="tooltip" data-original-title="Chargée à 100%"><i class="fas fa-battery-full"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->
                                    </table>
                                    <a href="{{route('installations.show', ['installation'=>1, 'batiment'=>1])}}">Plus d'information sur l'installation</a>
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>

                <div class=" col-lg-12 col-xl-6 mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Panneaux Solaire 150MW</h4>
                    <!-- Text -->
                    <p class="card-text mb-4"><a href="{{route('batiments.show', ['batiment'=>1])}}">Pavillon principale</a> - Panneaux solaire R&D - 2015-07-15</p>
                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="install2"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">


                            <div class="row mb-0">
                                <!-- First column -->
                                <div class="col-md-12">

                                    <table class="table mdDataTable w-100">

                                        <!-- Table head -->
                                        <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th class="th-sm">Equipement</th>
                                            <th class="th-sm">Puissance Nominal</th>
                                            <th class="th-sm">Production actuel</th>
                                            <th class="th-sm">Journée</th>
                                            <th class="th-sm">Semaine</th>
                                            <th class="th-lg">Statue</th>
                                            <th class="th-sm">Date d'installation</th>
                                            <th class="th-sm fit">&nbsp;</th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge default-color" data-toggle="tooltip" data-original-title="Similaire à la semaine dernière"><i class="fas fa-equals"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge default-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-equals"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->
                                    </table>
                                    <a href="{{route('installations.show', ['installation'=>1, 'batiment'=>1])}}">Plus d'information sur l'installation</a>
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>

                <div class=" col-lg-12 col-xl-6 mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Chauffage 20 000W</h4>
                    <!-- Text -->
                    <p class="card-text mb-4"><a href="{{route('batiments.show', ['batiment'=>1])}}">Pavillon sportif</a> - Système geothermique - 2018-07-15</p>
                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="install3"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">


                            <div class="row mb-0">
                                <!-- First column -->
                                <div class="col-md-12">

                                    <table class="table mdDataTable w-100">

                                        <!-- Table head -->
                                        <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th class="th-sm">Equipement</th>
                                            <th class="th-sm">Puissance Nominal</th>
                                            <th class="th-sm">Production actuel</th>
                                            <th class="th-sm">Journée</th>
                                            <th class="th-sm">Semaine</th>
                                            <th class="th-lg">Statue</th>
                                            <th class="th-sm">Date d'installation</th>
                                            <th class="th-sm fit">&nbsp;</th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Système géothermique</td>
                                            <td>10 000 W</td>
                                            <td>7 800 W</td>
                                            <td>21k W&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>75k W&nbsp;<span class="badge default-color" data-toggle="tooltip" data-original-title="Similaire à la semaine dernière"><i class="fas fa-equals"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Système géothermique</td>
                                            <td>10 000 W</td>
                                            <td>6 500 W</td>
                                            <td>18k W&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>72k W&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>50 MW</td>
                                            <td>0 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Chargé&nbsp;<span class="badge secondary-color" data-toggle="tooltip" data-original-title="Chargée à 100%"><i class="fas fa-battery-full"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>50 MW</td>
                                            <td>5 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>50 MW</td>
                                            <td>5 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->
                                    </table>
                                    <a href="{{route('installations.show', ['installation'=>1, 'batiment'=>1])}}">Plus d'information sur l'installation</a>
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->
                    </div>
                    <!-- Card -->
                </div>

                <div class=" col-lg-12 col-xl-6 mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Panneaux Solaire 150MW</h4>
                    <!-- Text -->
                    <p class="card-text mb-4"><a href="{{route('batiments.show', ['batiment'=>1])}}">Pavillon sportif</a> - Panneaux solaire terrain de football - 2019-07-15</p>
                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="install4"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">


                            <div class="row mb-0">
                                <!-- First column -->
                                <div class="col-md-12">

                                    <table class="table mdDataTable w-100">

                                        <!-- Table head -->
                                        <thead class="rgba-stylish-strong white-text">
                                        <tr>
                                            <th class="th-sm">Equipement</th>
                                            <th class="th-sm">Puissance Nominal</th>
                                            <th class="th-sm">Production actuel</th>
                                            <th class="th-sm">Journée</th>
                                            <th class="th-sm">Semaine</th>
                                            <th class="th-lg">Statue</th>
                                            <th class="th-sm">Date d'installation</th>
                                            <th class="th-sm fit">&nbsp;</th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge default-color" data-toggle="tooltip" data-original-title="Similaire à la semaine dernière"><i class="fas fa-equals"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge default-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-equals"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>83 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.7 MW</td>
                                            <td>18 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>86 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Batterie</td>
                                            <td>10 MW</td>
                                            <td>2 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>Se&nbsp;décharge&nbsp;<span class="badge warning-color" data-toggle="tooltip" data-original-title="Chargée à 76%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><a href="{{route('equipements.show', ['produit'=>1])}}"></a><i class="fa fa-search"></i></td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->
                                    </table>
                                    <a href="{{route('installations.show', ['installation'=>1, 'batiment'=>1])}}">Plus d'information sur l'installation</a>
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
{{--                @endfor--}}
            </div>
        </section>

        <hr>
        <section id="batiments" class="mt-2">
            <h4>Batiments</h4>
{{--                @for($i=0; $i<2; $i++)--}}
            <div class="mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Pavillons principale</h4>
                    <!-- Text -->
                    <p class="card-text mb-4">Campus UQAC - <a href="https://www.google.ca/maps/place/48%C2%B025'11.4%22N+71%C2%B003'08.7%22W/@48.4198298,-71.0535223,18z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d48.4198276!4d-71.052428" target="_blank">48.419828, -71.052428</a></p>
                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="batiment1"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">

                            <div class="row mb-0">

                                <!-- First column -->
                                <div class="col-md-6">
                                    <div class="container my-5 pt-5 pb-3 px-4 z-depth-1">


                                        <!--Section: Block Content-->
                                        <section>

                                            <!--Grid row-->
                                            <div class="row">

                                                <!--Grid column-->
                                                <div class="col-md-6 mb-4">

                                                    <h5 class="text-center font-weight-bold mb-4">Aujourd'hui</h5>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Energie verte</small>
                                                        <small><span><strong>68</strong></span>/<span></span>134 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 51%" aria-valuenow="51"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Hydro Quebec</small>
                                                        <small><span><strong>47</strong></span>/<span></span>134 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Batterie</small>
                                                        <small><span><strong>22</strong></span>/<span></span>134 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <div class="col-md-6 mb-4">

                                                    <h5 class="text-center font-weight-bold mb-4">Semaine</h5>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Energie verte</small>
                                                        <small><span><strong>200</strong></span>/<span></span>300 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="66"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Hydro Quebec</small>
                                                        <small><span><strong>47</strong></span>/<span></span>300 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>

                                                    <div class="d-flex justify-content-between">
                                                        <small class="text-muted">Batterie</small>
                                                        <small><span><strong>53</strong></span>/<span></span>300 MW</small>
                                                    </div>
                                                    <div class="progress md-progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->
                                            <h6>Autonome vis-à-vis du réseau <span class="font-weight-bold">53%</span> du temps</h6>
                                            <a href="{{route('batiments.show', ['batiment'=>1])}}">Plus d'information sur le batiment</a>

                                        </section>
                                        <!--Section: Block Content-->


                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-seedling fa-2x green-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Type d'énergie verte</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">1 </h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mt-4">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-car-battery fa-2x red-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Nombre de batteries</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">2</h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mt-4">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-graduation-cap fa-2x orange-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Note environnemental</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">3.7/5</h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>
                                    <!-- Card -->
                                </div>
                                <div class="col-md-3 mt-2">
                                    <!-- Card -->
                                    <div class="card">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-solar-panel fa-2x blue-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Equipements de production</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">7 </h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mt-4">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-warehouse fa-2x yellow-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Capacité de stockage</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">37 MW</h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>

                                    <!-- Card -->
                                    <div class="card mt-4">

                                        <!-- Card Data -->
                                        <div class="row mt-4 mb-3">

                                            <div class="col-md-3 col-3 text-left pl-4">

                                                <!-- Facebook -->
                                                <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-leaf fa-2x purple-text"> </i></a>

                                            </div>

                                            <div class="col-md-9 col-9 text-right pr-5">

                                                <p class="font-small grey-text mb-1">Action de préservation</p>
                                                <h5 class="ml-4 mb-2 font-weight-bold">2</h5>

                                            </div>
                                        </div>
                                        <!-- Card Data -->

                                    </div>
                                        <!-- Card -->
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>

            <div class="mb-3">
                <!-- Title -->
                <h4 class="card-title font-weight-bold">Pavillons sportif</h4>
                <!-- Text -->
                <p class="card-text mb-4">Campus UQAC - <a href="https://www.google.ca/maps/place/48%C2%B025'09.8%22N+71%C2%B003'00.7%22W/@48.4191909,-71.049797,18.75z/data=!4m6!3m5!1s0x0:0x0!7e2!8m2!3d48.4193804!4d-71.0501798" target="_blank">48.419380, -71.050180</a></p>
                <!-- Card -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header blue-gradient">
                        <canvas id="batiment2"  class="chartjs-render-monitor" ></canvas>
                    </div>
                    <!-- Card image -->

                    <!-- Card content -->
                    <div class="card-body card-body-cascade blue-panel text-center">

                        <div class="row mb-0">

                            <!-- First column -->
                            <div class="col-md-6">
                                <div class="container my-5 pt-5 pb-3 px-4 z-depth-1">


                                    <!--Section: Block Content-->
                                    <section>

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-md-6 mb-4">

                                                <h5 class="text-center font-weight-bold mb-4">Aujourd'hui</h5>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Energie verte</small>
                                                    <small><span><strong>450</strong></span>/<span></span>500 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Hydro Quebec</small>
                                                    <small><span><strong>0</strong></span>/<span></span>500 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Batterie</small>
                                                    <small><span><strong>50</strong></span>/<span></span>500 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-md-6 mb-4">

                                                <h5 class="text-center font-weight-bold mb-4">Semaine</h5>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Energie verte</small>
                                                    <small><span><strong>900</strong></span>/<span></span>2000 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Hydro Quebec</small>
                                                    <small><span><strong>500</strong></span>/<span></span>2000 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">Batterie</small>
                                                    <small><span><strong>600</strong></span>/<span></span>2000 MW</small>
                                                </div>
                                                <div class="progress md-progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->
                                        <h6>Autonome vis-à-vis du réseau <span class="font-weight-bold">83%</span> du temps</h6>
                                        <a href="{{route('batiments.show', ['batiment'=>1])}}">Plus d'information sur le batiment</a>

                                    </section>
                                    <!--Section: Block Content-->


                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <!-- Card -->
                                <div class="card">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-seedling fa-2x green-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Type d'énergie verte</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">2 </h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mt-4">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-car-battery fa-2x red-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Nombre de batteries</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">8</h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mt-4">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-graduation-cap fa-2x orange-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Note environnemental</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">4.5/5</h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>
                                <!-- Card -->
                            </div>
                            <div class="col-md-3 mt-2">
                                <!-- Card -->
                                <div class="card">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-solar-panel fa-2x blue-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Equipements de production</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">14</h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>
                                <!-- Card -->

                                <!-- Card -->
                                <div class="card mt-4">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-warehouse fa-2x yellow-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Capacité de stockage</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">100 MW</h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>

                                <!-- Card -->
                                <div class="card mt-4">

                                    <!-- Card Data -->
                                    <div class="row mt-4 mb-3">

                                        <div class="col-md-3 col-3 text-left pl-4">

                                            <!-- Facebook -->
                                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fas fa-leaf fa-2x purple-text"> </i></a>

                                        </div>

                                        <div class="col-md-9 col-9 text-right pr-5">

                                            <p class="font-small grey-text mb-1">Action de préservation</p>
                                            <h5 class="ml-4 mb-2 font-weight-bold">9</h5>

                                        </div>
                                    </div>
                                    <!-- Card Data -->

                                </div>
                                <!-- Card -->
                            </div>
                            <!-- First column -->
                        </div>
                        <!-- Third row -->

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->
            </div>
{{--                @endfor--}}
        </section>
    </div>
@endsection

@section('css')
    <!-- MDBootstrap Simple Charts  -->
    <link href={{URL::asset("/MDB/css/addons-pro/simple-charts.min.css")}} rel="stylesheet">
@endsection
@section('js')
    <script src="{{URL::asset("/js/dashboard.js")}}"></script>
    <script src="{{URL::asset("/MDB/js/addons-pro/simple-charts.min.js")}}"></script>
@endsection
