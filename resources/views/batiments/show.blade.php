@extends('layouts.dashboard')

@section('page-name')
    - Batiment Pavillon principale
@endsection

@section('content')
    <div class="row">
        <div class="col-8">
            <h4>Impact de vos installation sur la biodiversité</h4>
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                           aria-controls="collapseOne1">
                            <h5 class="mb-0">
                               Destruction des sols <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Votre installations <a href="{{route('installations.show', ['batiment'=>1, 'installation'=>1])}}">Panneaux solaire R&D</a> occupe près de 80m². Cela peut avoir un fort impact sur les rongeurs et insects notamment.

                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion" id="accordionEx2" role="tablist" aria-multiselectable="true">

                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingOne11">
                                        <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapseOne11" aria-expanded="true"
                                           aria-controls="collapseOne11">
                                            <h5 class="mb-0">
                                                Solution #1 <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseOne11" class="collapse" role="tabpanel" aria-labelledby="headingOne11"
                                         data-parent="#accordionEx2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo21">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseTwo21"
                                           aria-expanded="false" aria-controls="collapseTwo21">
                                            <h5 class="mb-0">
                                                Solution #2 <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                                         data-parent="#accordionEx2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                                <!-- Accordion card -->
                                <div class="card">

                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingThree31">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapseThree31"
                                           aria-expanded="false" aria-controls="collapseThree31">
                                            <h5 class="mb-0">
                                                Solution #3 <i class="fas fa-angle-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
                                         data-parent="#accordionEx2">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>

                                </div>
                                <!-- Accordion card -->

                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo2">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                           aria-expanded="false" aria-controls="collapseTwo2">
                            <h5 class="mb-0">
                                Perturbation des insectes polinisateurs <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree3">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                           aria-expanded="false" aria-controls="collapseThree3">
                            <h5 class="mb-0">
                                Augmentation de la consommation d'eau <i class="fas fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>

                </div>
                <!-- Accordion card -->

            </div>
            <!-- Accordion wrapper -->
            <hr>
            <h4>Liste des installations du batiment</h4>
            <table class="table mdDataTable w-100">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Installé&nbsp;le</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Panneaux Solaire 80MW</td>
                        <td>Panneaux solaire toit nord-est</td>
                        <td>2015-07-15</td>
                        <td><a href="{{route('installations.show', ['batiment'=>1, 'installation'=>1])}}"><i class="fas fa-search"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Panneaux Solaire 150MW</td>
                        <td>Panneaux solaire R&D</td>
                        <td>2015-07-15</td>
                        <td><a href="{{route('installations.show', ['batiment'=>1, 'installation'=>1])}}"><i class="fas fa-search"></i></a></td>
                    </tr>
                </tbody>
            </table>

            <hr>
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <div class="media green lighten-2 text-white z-depth-1 rounded">
                        <i class="fas fa-seedling fa-3x green z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3"><small>Production aujourd'hui</small></p>
                            <p class="font-weight-bold mb-1 ml-3">134 MW</p>
                            <div class="progress md-progress mb-0 rounded-0">
                                <div class="progress-bar green darken-2" role="progressbar" style="width: 45%" aria-valuenow="45"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="ml-3 mb-0"><small>300 MW cette semaine</small></p>
                        </div>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media deep-purple lighten-2 text-white z-depth-1 rounded">
                        <i class="fas fa-leaf fa-3x deep-purple z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3"><small>Action cette semaine</small></p>
                            <p class="font-weight-bold mb-1 ml-3">0</p>
                            <div class="progress md-progress mb-0 rounded-0">
                                <div class="progress-bar deep-purple darken-3" role="progressbar" style="width: 0%" aria-valuenow="0"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="ml-3 mb-0"><small>2 au total</small></p>
                        </div>
                    </div>


                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="media orange lighten-2 text-white z-depth-1 rounded">
                        <i class="fas fa-graduation-cap fa-3x orange z-depth-1 p-4 rounded-left text-white"></i>
                        <div class="media-body">
                            <p class="text-uppercase mt-2 mb-1 ml-3"><small>Evolution de la note</small></p>
                            <p class="font-weight-bold mb-1 ml-3">-2%</p>
                            <div class="progress md-progress mb-0 rounded-0">
                                <div class="progress-bar orange darken-4" role="progressbar" style="width: 74%" aria-valuenow="74"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="ml-3 mb-0"><small><a class="white-text" href="#">Vous pouvez faire mieux !</a></small></p>
                        </div>
                    </div>


                </div>
                <!--Grid column-->
            </div>

            <hr>
            <h4>Liste des equipements du batiment</h4>
            <table class="table mdDataTable w-100">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Modele</th>
                    <th>Puissance nominale</th>
                    <th>Installation</th>
                    <th>Installé&nbsp;le</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Panneaux solaire</td>
                    <td>EWS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 80MW</td>
                    <td>2020-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Panneaux solaire</td>
                    <td>EWS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 80MW</td>
                    <td>2020-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Panneaux solaire</td>
                    <td>EWS-6P</td>
                    <td>30 MW</td>
                    <td>Panneaux Solaire 80MW</td>
                    <td>2020-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Batterie</td>
                    <td>Cell-1W</td>
                    <td>1 MW</td>
                    <td>Panneaux Solaire 80MW</td>
                    <td>2020-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Batterie</td>
                    <td>Cell-1WB</td>
                    <td>3 MW</td>
                    <td>Panneaux Solaire 80MW</td>
                    <td>2020-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4P</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4PA</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Panneaux solaire</td>
                    <td>EAS-4PA</td>
                    <td>25 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-01-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Batterie</td>
                    <td>UPS-4PA-6W</td>
                    <td>10 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-08-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Batterie</td>
                    <td>UPS-4PA-6W</td>
                    <td>10 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-08-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Batterie</td>
                    <td>UPS-4PA-6W</td>
                    <td>10 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-08-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Batterie</td>
                    <td>UPS-4PA-6W</td>
                    <td>10 MW</td>
                    <td>Panneaux Solaire 150MW</td>
                    <td>2019-08-15</td>
                    <td><a href="{{route('equipements.show', ['produit'=>1])}}"><i class="fas fa-search"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <!-- Card -->
            <div class="mb-3 card map-card">

                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                </div>

                <!-- Card content -->
                <div class="card-body closed px-0">

                    <div class="button px-2 mt-3">
                        <a class="btn-floating btn-lg living-coral float-right"><i class="fas fa-arrow-alt-circle-up"></i></a>
                    </div>

                    <div class="white px-4 pb-4 pt-3-5">

                        <!-- Title -->
                        <h5 class="card-title h5 living-coral-text">Pavillon principale</h5>

                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">Campus UQAC</h6>
{{--                            <h6 class="font-small font-weight-light mt-n1">25 min</h6>--}}
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between pt-2 mt-1 text-center text-uppercase living-coral-text">
                            <div>
                                <i class="fas fa-car-battery fa-lg mb-3"></i>
                                <p class="mb-0">6</p>
                            </div>
                            <div>
                                <i class="fas fa-solar-panel fa-lg mb-3"></i>
                                <p class="mb-0">15</p>
                            </div>
                            <div>
                                <i class="fas fa-graduation-cap fa-lg mb-3"></i>
                                <p class="mb-0">3.7</p>
                            </div>
                        </div>

                        <hr>

                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-map-marker-alt living-coral-text"></i>
                                </th>
                                <td class="pb-3 pt-2"><a href="https://www.google.ca/maps/place/48%C2%B025'11.4%22N+71%C2%B003'08.7%22W/@48.4198298,-71.0535223,18z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d48.4198276!4d-71.052428" target="_blank">48.419828, -71.052428</a></td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="far fa-calendar living-coral-text"></i>
                                </th>
                                <td class="pb-3 pt-2">2020-01-15</td>
                            </tr>
                            <tr class="mt-2">
                                <td></td>
{{--                                <th scope="row" class="px-0 pb-3 pt-2">--}}
{{--                                    <i class="fas fa-cloud-moon living-coral-text"></i>--}}
{{--                                </th>--}}
{{--                                <td class="pb-3 pt-2">Sunny weather tomorrow</td>--}}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <hr>
            <h4>Données de consommation du batiment</h4>
            <table class="table mdDataTable w-100">
                <thead>
                    <th>Date</th>
                    <th>Consomation</th>
                </thead>
                <tbody>
                <tr>
                    <td>2020-01-15 12:10:00</td>
                    <td>5 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 12:20:00</td>
                    <td>5 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 12:30:00</td>
                    <td>5 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 12:40:00</td>
                    <td>3 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 12:50:00</td>
                    <td>3 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 13:00:00</td>
                    <td>3 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 13:10:00</td>
                    <td>5 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 13:20:00</td>
                    <td>3 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 13:40:00</td>
                    <td>4 MW</td>
                </tr>
                <tr>
                    <td>2020-01-15 13:50:00</td>
                    <td>3 MW</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('css')
    <!-- MDBootstrap Simple Charts  -->
    <link href={{URL::asset("/MDB/css/addons-pro/simple-charts.min.css")}} rel="stylesheet">
    <!-- MDBootstrap Cards Extended Pro  -->
    <link href="{{URL::asset('/MDB/css/addons-pro/cards-extended.min.css')}}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{URL::asset("/MDB/js/addons-pro/simple-charts.min.js")}}"></script>
@endsection
