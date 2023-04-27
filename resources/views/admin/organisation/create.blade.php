@extends('layouts.plantillaAdmin')

@section('titulo')
    Crear ONG
@endsection

@section('contenido')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Organisation</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.ong.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.organisation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
