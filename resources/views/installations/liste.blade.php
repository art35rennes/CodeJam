@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos installations
@endsection

@section('content')
    <table class="mdDataTable table w-100">
        <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Ajouté&nbsp;le</th>
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($installations as $installation)
            <td>{{$installation->id}}</td>
            <td>{{$installation->nom}}</td>
            <td>{{$batiment->geolocalisation}}</td>
            <td>{{$installation->created_at}}</td>
            <td><i class="fas fa-search"></i></td>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("installations.create") }}">Ajouter une installation</a>

@endsection
