@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos équipements
@endsection

@section('content')
    <table class="mdDataTable table w-100">
        <thead>
        <th>ID</th>
        <th>Marque</th>
        <th>Référence</th>
        <th>Installation</th>
        <th>Installé&nbsp;le</th>
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($equipements as $equipement)
            <td>{{$equipement->id}}</td>
            <td>{{$equipement->marque}}</td>
            <td>{{$equipement->reference}}</td>
            <td>{{$equipement->nom}}</td>
            <td>{{$equipement->date_installation}}</td>
            <td><i class="fas fa-search"></i></td>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("installations.create") }}">Ajouter un equipement</a>

@endsection
