@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


    @can('admin.tags.create')
        <a href="{{route('admin.tags.create')}}" class="btn btn-secondary btn-sm float-right">Nueva etiqueta</a>
    @endcan

    <h1>Mostrar listado de etiquetas</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>

        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class=" table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}">Edit</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{route('admin.tags.destroy',$tag)}}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
