@extends('Plantilla/plantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">PRUEBA TECNICA</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('inicio.create') }}" class="btn btn-secondary btn-primary">Crear</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Sexo</th>
                                        <th>Area</th>
                                        <th>Bolitin</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($response as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->sexo }}</td>
                                            <td>{{ $item->area }}</td>
                                            <td>
                                                @if ($item->boletin == 1)
                                                    SI
                                                @else
                                                    NO
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Acciones
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Editar</a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#eliminar"
                                                            href="#">Eliminar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="eliminar">
        <div class="modal-dialog text-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">SEGURO QUE DESEA ELIMINAR ?</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fas fa-user-alt-slash fa-10x" style="color:rgb(255, 52, 52)"></i>
                </div>
                <div class="modal-footer">
                    {!! Form::open(['method' => 'DELETE', 'route' => ['inicio.destroy', $item->id]]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-primary mt-3']) !!}
                    <button type="button" class="btn btn-danger mt-3" data-dismiss="modal">Atras</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
