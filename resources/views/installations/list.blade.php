@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos installations
@endsection

@section('content')
{{--    {{dd($installations)}}--}}
    <table class="mdDataTable table w-100">
        <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Batiment</th>
        <th>Equipements</th>
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($installations as $installation)
        <tr>
            <td>{{$installation->id}}</td>
            <td>{{$installation->nom}}</td>
            <td>{{$installation->batiment}}</td>
            <td>{{$installation->equipements}}</td>
            <td><i class="fas fa-search"></i></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("installations.create") }}">Ajouter une installation</a>

@endsection
