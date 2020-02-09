@extends('layouts.dashboard')

@section('page-name')
    - Affichage des Logs
@endsection

@section('content')
    <table class="table mdDataTable w-100">
        <thead>
        <tr>
           <th>Id</th>
           <th>Reference Id</th>
           <th>Reference</th>
           <th>Valeur</th>
           <th>Consomation</th>
           <th>Ajouté le</th>
           <th>Mit à jour le</th>
           <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
            <tr>
                @foreach($logs as $key=>$val)
                <td>{{$val}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn blue-gradient" href="{{ route("logs.create", ['type'=>'batiment']) }}">Ajouter un log de batiment</a>
    <a class="btn blue-gradient" href="{{ route("logs.create", ['type'=>'equipement']) }}">Ajouter un log de d'équipement</a>
@endsection
