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
            <tr>
                <td>{{$equipement['equipement']->id}}</td>
                <td>{{$equipement['produit']->marque}}</td>
                <td>{{$equipement['produit']->reference}}</td>
                <td>{{$equipement['equipement']->nom}}</td>
                <td>{{$equipement['equipement']->date_installation}}</td>
                <td><i class="fas fa-search"></i></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("equipements.create") }}">Ajouter un equipement</a>

@endsection
