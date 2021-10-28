@extends('layouts.plantilla')
@section('title', 'Mostrando departamento')
@section('controller', 'Departamentos')
@section('content')
Viendo: <strong>{{$id_departamento}}</strong> en: <strong>{{$id_pais}}</strong>
@endsection