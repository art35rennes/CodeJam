@extends('layouts.dashboard')

@section('page-name')
    - Ajout d'une nouvel installation
@endsection

@section('content')

    <form class="form-data" id="batiment" method="POST" action="{{ route('batiments.store') }}">
        @csrf
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

        <div id="form-row">
            <select name="batiment_id" class="mdb-select md-form col-4">
                <option value="" disabled selected>Choisissez un batiment</option>
                @foreach($batiments as $batiment)
                    <option value="{{$batiment->id}}">{{$batiment->nom}}</option>
                @endforeach
            </select>
        </div>

        <button class="btn blue-gradient" type="submit">Ajouter</button>
    </form>


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
