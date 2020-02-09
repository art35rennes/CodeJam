@extends('layouts.dashboard')

@section('page-name')
    - Ajout d'une nouveau problème
@endsection

@section('content')

    <form class="form-data" id="batiment" method="POST" action="{{ route('problemes.store') }}">
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

        <div id="type_table">
            <select id="type_table_select" class="mdb-select md-form" searchable="Rechercher ici.." name="equipement" required>
                <option value="0" disabled selected>Choisissez un type</option>
                <option value="1">Panneaux solaires</option>
                <option value="2">Batteries</option>
            </select>
        </div>
{{--        TODO add input file--}}

        <button class="btn blue-gradient" type="submit">Ajouter</button>
    </form>


@endsection

@section('js')
    <!-- MDBootstrap Steppers Pro  -->
    <script>
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
        });
    </script>
@endsection
@section('css')

@endsection
