@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos solutions pour le problème {{$probleme->id}}
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
        @foreach($solutions as $val)
            <td>{{$val->id}}</td>
            <td>{{$val->nom}}</td>
            <td>{{$val->description}}</td>
            <td>{{$val->created_at}}</td>
            <td><a href="{{route('solutions.index', ['problème'=>$val->probleme_id])}}"><i class="fas fa-search"></i></a></td>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("solutions.create", ['probleme'=>$probleme->id]) }}">Ajouter un solution</a>

@endsection
