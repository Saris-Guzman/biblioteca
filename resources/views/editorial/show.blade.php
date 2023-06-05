@extends('layouts.app')

@section('template_title')
    {{ $editorial->name ?? "{{ __('Show') Editorial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Editorial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('editorials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $editorial->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $editorial->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $editorial->email }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $editorial->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $editorial->numero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
