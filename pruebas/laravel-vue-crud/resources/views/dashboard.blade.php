@extends('app')
@section('content')
    <div id="crud" class="row">
        <div class="col-xs-12">
            <h1 class="page-header">CRUD Laravel y Vue</h1>
        </div>
        <div class="col-sm-7"><!--id que se va a usar desde vue-->
            <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create"> <!--datatarget create es el identificador del modal-->
                Nueva tarea
            </a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th colspan="2">
                            &nbsp;  <!--Con esta entidad html se coloca explicitamente un espacio>-->
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="keep in keeps"><!--keeps es el array que tiene todos los datas y keep es una variable-->
                        <td width="10px">@{{ keep.id }}</td>
                        <td>@{{ keep.keep }}</td>
                        <td width="10px">
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <a href="#" class="btn btn-danger btn-sm" v-on:click="deleteKeep(keep)">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @include('create')
        </div>
        <div class="col-sm-5"><!-- En este div se va a colocar la variable $data que es la que siempre hemos usado para ver a detalle los datos de vuejs-->
            <pre>
                @{{ $data }}
            </pre>
        </div>
    </div>
@endsection
