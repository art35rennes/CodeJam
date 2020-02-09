@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos batiments
@endsection
@section('content')
    <table class="mdDataTable table w-100">
        <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Geolocalisation</th>
        <th>Ajouté&nbsp;le</th>
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($batiments as $batiment)
            <tr>
                <td>{{$batiment->id}}</td>
                <td>{{$batiment->nom}}</td>
                <td class="text-truncate">{{$batiment->description}}</td>
                <td>{{$batiment->geolocalisation}}</td>
                <td>{{$batiment->created_at}}</td>
                <td><a href="{{route('batiments.show', ['batiment'=>1])}}"><i class="fas fa-search"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("batiments.create") }}">Ajouter un batiment</a>

@endsection
