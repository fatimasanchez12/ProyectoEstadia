@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Carrusel</h1>
@stop

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            {!! Form::open(['route'=>['admin.carrucel.update',$carrusel],'method'=>'PUT','files'=>true]) !!}
            <div class="jumbotron">
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::text('descripcion',$carrusel->descripcion,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK</label>
                    {!! Form::text('link',$carrusel->link ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$carrusel->orden,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="{{ asset('/img/carrusel') }}/{{$carrusel->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
