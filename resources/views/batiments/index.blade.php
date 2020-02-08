@extends('layouts.dashboard')

@section('page-name')
    - Liste de vos batiments
@endsection
@section('content')
    <table class="mdDataTable">
        <thead>
        @foreach($batiments as $key=>$value)
            <th class="th-sm">{{$key}}</th>
        @endforeach
        <th>&nbsp;</th>
        </thead>
        <tbody>
        @foreach($batiments as $batiment)
            <td>{{$batiment->id}}</td>
            <td>{{$batiment->nom}}</td>
            <td>{{$batiment->description}}</td>
            <td>{{$batiment->geolocalisation}}</td>
            <td>{{$batiment->created_at}}</td>
            <td></td>
        @endforeach
        </tbody>
    </table>
@endsection
