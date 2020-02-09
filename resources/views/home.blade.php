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
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production total sur la journée en cours"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Production actuel: <strong>1.3 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production moyenne d'un équipement sur une journée"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="30"><span class="percent">90</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge red accent-2 p-2">Production d'energie verte <i class="fas fa-arrow-circle-up ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>

{{--                HYDRO--}}
                <div class="col-lg-6 col-xl-3 col-sm-5 mb-2 text-center ">
                    <!-- Summary -->
                    <p>Consomation total: <strong>2.3 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production total sur la journée en cours"><i class="fas fa-question"></i></button>
                    </p>
                    <p>Consomation actuel: <strong>0.7 MW</strong>
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Production moyenne d'un équipement sur une journée"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="30"><span class="percent">90</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge blue accent-2 p-2">Consomation Hydro Quebec <i class="fas fa-arrow-circle-up ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
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
                        <button type="button" class="btn btn-info btn-sm p-2 mr-0 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Se décharge actuellement pour alimenter le reseau"><i class="fas fa-question"></i></button>
                    </p>

                    <!-- Change chart -->
                    <span class="min-chart my-4" id="chart-sales" data-percent="30"><span class="percent">90</span><canvas height="110" width="110"></canvas></span>
                    <h5>
                        <span class="badge orange accent-2 p-2">Statue des batteries <i class="fas fa-arrow-circle-up ml-1"></i></span>
                        <button type="button" class="btn btn-info btn-sm p-2 waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Percentage change compared to the same period in the past"><i class="fas fa-question"></i>
                        </button>
                    </h5>
                </div>
                    {{--                    #1 - Production d'energie verte--}}
                    {{--                    #2 - Consomation sur le réseau public--}}
                    {{--                    #3 - Niveau de charge des batteries--}}
                    {{--                    #4 - Note environementale--}}
{{--                @endfor--}}

            </div>
        </section>
        <hr>
        <section id="installations" class="mt-2">
            <h4>Installations</h4>
            <div class="row">
                @for($i=0; $i<4; $i++)
                <div class=" col-lg-12 col-xl-6 mb-3">
                    <!-- Title -->
                    <h4 class="card-title font-weight-bold">Installation #{{$i+1}}</h4>
                    <!-- Text -->
                    <p class="card-text mb-4">Description de l'installation</p>
                    <!-- Card -->
                        <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="sales"  class="chartjs-render-monitor" ></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade blue-panel text-center">

                            <!-- Second row -->
{{--                            <div class="row mx-3 mb-0 text-center">--}}
{{--                                <!-- Grid column -->--}}
{{--                                <div class="col mt-1 mb-2">--}}

{{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

{{--                                        <label class="btn btn-info btn-md active waves-effect waves-light">--}}

{{--                                            <input type="checkbox" name="options" id="option1" autocomplete="off" checked="">Clicks <strong>1000</strong>--}}
{{--                                            <i class="fas fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>--}}

{{--                                        </label>--}}

{{--                                    </div>--}}

{{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

{{--                                        <label class="btn btn-info btn-md waves-effect waves-light">--}}

{{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">Impressions <strong>1000</strong>--}}
{{--                                            <i class="fas fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>--}}

{{--                                        </label>--}}

{{--                                    </div>--}}

{{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

{{--                                        <label class="btn red accent-2 btn-md text-white waves-effect waves-light">--}}

{{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">CTR <strong>5%</strong> <i class="fas fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>--}}

{{--                                        </label>--}}

{{--                                    </div>--}}

{{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

{{--                                        <label class="btn red accent-2 btn-md text-white waves-effect waves-light">--}}

{{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">Position <strong>4.14</strong>--}}
{{--                                            <i class="fas fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>--}}

{{--                                        </label>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <!-- Grid column -->--}}

{{--                            </div>--}}

                            <!-- Third row -->
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
                                            <th class="th-sm">Statue</th>
                                            <th class="th-sm">Date d'installation</th>
                                            <th class="th-sm fit">&nbsp;</th>
                                        </tr>

                                        </thead>
                                        <!-- Table head -->

                                        <!-- Table body -->
                                        <tbody>

                                        <tr>
                                            <td>Panneau Solaire</td>
                                            <td>25 MW</td>
                                            <td>9.2 MW</td>
                                            <td>17 MW&nbsp;<span class="badge primary-color" data-toggle="tooltip" data-original-title="En hausse par rapport à hier à la même heure"><i class="fas fa-arrow-circle-up"></i></span></td>
                                            <td>90 MW&nbsp;<span class="badge danger-color" data-toggle="tooltip" data-original-title="En baisse par rapport à la semaine dernière"><i class="fas fa-arrow-circle-down"></i></span></td>
                                            <td>-</td>
                                            <td>2020-01-15</td>
                                            <td><i class="fa fa-search"></i></td>
                                        </tr>

                                        <tr>
                                            <td>Batterie</td>
                                            <td>1 MW</td>
                                            <td>-2.7 MW</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>En&nbsp;charge&nbsp;<span class="badge success-color" data-toggle="tooltip" data-original-title="Chargée à 97%"><i class="fas fa-battery-three-quarters"></i></span></td>
                                            <td>2020-01-15</td>
                                            <td><i class="fa fa-search"></i></td>
                                        </tr>
                                        </tbody>
                                        <!-- Table body -->
                                    </table>
                                </div>
                                <!-- First column -->
                            </div>
                            <!-- Third row -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->
                </div>
                @endfor
            </div>
        </section>

        <hr>
        <section id="batiments" class="mt-2">
            <h4>Batiments</h4>
                @for($i=0; $i<2; $i++)
                    <div class="mb-3">
                        <!-- Title -->
                        <h4 class="card-title font-weight-bold">Batiment #{{$i+1}}</h4>
                        <!-- Text -->
                        <p class="card-text mb-4">Description du batiment - géolocalisation</p>
                        <!-- Card -->
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header blue-gradient">
                                <canvas id="batiment"  class="chartjs-render-monitor" ></canvas>
                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade blue-panel text-center">

                                <!-- Second row -->
                            {{--                            <div class="row mx-3 mb-0 text-center">--}}
                            {{--                                <!-- Grid column -->--}}
                            {{--                                <div class="col mt-1 mb-2">--}}

                            {{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

                            {{--                                        <label class="btn btn-info btn-md active waves-effect waves-light">--}}

                            {{--                                            <input type="checkbox" name="options" id="option1" autocomplete="off" checked="">Clicks <strong>1000</strong>--}}
                            {{--                                            <i class="fas fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>--}}

                            {{--                                        </label>--}}

                            {{--                                    </div>--}}

                            {{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

                            {{--                                        <label class="btn btn-info btn-md waves-effect waves-light">--}}

                            {{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">Impressions <strong>1000</strong>--}}
                            {{--                                            <i class="fas fa-arrow-up ml-2 white-text"></i> <strong> 25%</strong>--}}

                            {{--                                        </label>--}}

                            {{--                                    </div>--}}

                            {{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

                            {{--                                        <label class="btn red accent-2 btn-md text-white waves-effect waves-light">--}}

                            {{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">CTR <strong>5%</strong> <i class="fas fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>--}}

                            {{--                                        </label>--}}

                            {{--                                    </div>--}}

                            {{--                                    <div class="btn-group mt-1" data-toggle="buttons">--}}

                            {{--                                        <label class="btn red accent-2 btn-md text-white waves-effect waves-light">--}}

                            {{--                                            <input type="checkbox" name="options" id="option2" autocomplete="off">Position <strong>4.14</strong>--}}
                            {{--                                            <i class="fas fa-arrow-down ml-2 white-text"></i> <strong> 25%</strong>--}}

                            {{--                                        </label>--}}

                            {{--                                    </div>--}}

                            {{--                                </div>--}}
                            {{--                                <!-- Grid column -->--}}

                            {{--                            </div>--}}

                            <!-- Third row -->
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

{{--                                                        <div class="d-flex justify-content-between">--}}
{{--                                                            <small class="text-muted">Send Inquiries</small>--}}
{{--                                                            <small><span><strong>250</strong></span>/<span></span>500</small>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="progress md-progress">--}}
{{--                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"--}}
{{--                                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                        </div>--}}

                                                    </div>
                                                    <!--Grid column-->

                                                    <!--Grid column-->
                                                    <div class="col-md-6 mb-4">

                                                        <h5 class="text-center font-weight-bold mb-4">Semaine</h5>

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

{{--                                                        <div class="d-flex justify-content-between">--}}
{{--                                                            <small class="text-muted">Send Inquiries</small>--}}
{{--                                                            <small><span><strong>250</strong></span>/<span></span>500</small>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="progress md-progress">--}}
{{--                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"--}}
{{--                                                                 aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                        </div>--}}

                                                    </div>
                                                    <!--Grid column-->

                                                </div>
                                                <!--Grid row-->
                                                <h6>Autonome vis-à-vis du réseau <span class="font-weight-bold">53%</span> du temps</h6>
                                                <a href="#">Plus d'information sur le batiment</a>

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

                                                    <p class="font-small grey-text mb-1">Sources d'énergie verte</p>
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
                @endfor
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
