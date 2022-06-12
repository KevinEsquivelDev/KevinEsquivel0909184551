
@extends('layouts.app')

@section('template_title')
    Create Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card bg-light border-primary ">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <i class="fas fa-chalkboard-teacher"></i>  {{ __('Crear empleado') }}
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('empleados.store') }}"  role="form" enctype="multipart/form-data">
                                @csrf

                                @include('empleado.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
