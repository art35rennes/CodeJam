@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos équipements
@endsection

@section('content')
    <table class="mdDataTable table w-100">
        <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Equipement</th>
        <th>Ajouté&nbsp;le</th>
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($problemes as $val)
            <tr>
            <td>{{$val->id}}</td>
            <td>{{$val->nom}}</td>
            <td>{{$val->description}}</td>
            <td>{{$val->equipement}}</td>
            <td>{{$val->created_at}}</td>
            <td><a href="{{ route('solutions.index', $val) }}"><i class="fas fa-search"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("problemes.create") }}">Ajouter un problème</a>

@endsection
