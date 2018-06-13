@extends('layouts.app')
@section('content')

<div class="row">
 <section class="content">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-body">
 <div class="pull-left"><h3>Lista Dependencias</h3></div>
 <div class="pull-right">
 <div class="btn-group">
 <a href="{{ route('Dependencia.create') }}" class="btn btn-info" >Añadir Dependencia</a>
 </div>
 </div>
 <div class="table-container">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>Tipo de tramite</th>
<th>Nombre</th>
<th>Descripcion</th>
</thead>
<tbody>
@if($dependencia->count())
@foreach($dependencia as $Dependencia)
<tr>
<td>{{$Dependencia->tipoTramite}}</td>
<td>{{$Dependencia->Nombre}}</td>
<td>{{$Dependencia->Descripcion}}</td>
<td><a class="btn btn-primary btn-xs" href="{{action('dependenciaControlador@edit', $Dependencia->id)}}" >
<span class="glyphicon glyphicon-pencil"></span></a></td>
<td>
<form action="{{action('dependenciaControlador@destroy', $Dependencia->id)}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicontrash"></span></button>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="8">No hay registro !!</td>
</tr>
@endif
</tbody>
</table>
</div>
</div>
{{ $dependencia->links() }}
</div>
 </div>
 
</section>
@endsection