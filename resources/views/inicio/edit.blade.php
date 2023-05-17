@extends('Plantilla/plantilla')
@section('banner')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">PRUEBA TECNICA</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('inicio.index') }}" class="btn btn-secondary btn-primary">Volver Atras</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::model($empleado, [
                            'method' => 'PATCH',
                            'route' => ['inicio.update', $empleado->id],
                        ]) !!}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nombre Completo <span style="color: red">*</span></label>
                                {!! Form::text('Nombre', $empleado->nombre, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Nombre Completo',
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Correo Electrónico <span style="color: red">*</span></label>
                                {!! Form::email('Correo', $empleado->email, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Correo Electrónico',
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Sexo <span style="color: red">*</span></label>
                                {!! Form::radio('Sexo', 'M', false, ['class' => 'radio-button']) !!} Masculino
                                {!! Form::radio('Sexo', 'F', false, ['class' => 'radio-button']) !!} Femenino
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Area <span style="color: red">*</span></label>
                                <select name="Area" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                    @foreach ($areas as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $empleado->area_id) selected @endif>{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Descripcion <span style="color: red">*</span></label>
                                {!! Form::textarea('Descripcion', $empleado->descripcion, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Descripcion de la experiencia del empleado',
                                    'required',
                                ]) !!}
                                {!! Form::radio('boletin', '1', false, ['class' => 'radio-button']) !!} Deseo Recibir boletin informativo
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Roles <span style="color: red">*</span></label>
                                <select name="Roles" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $rolemp[0]->rol_id) selected @endif>{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                                <a href="{{ route('inicio.index') }}" class="btn btn-danger">volver atrás</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
