@extends('layouts.main')

@push('custom-css')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
@endpush

@push('custom-js')
    <style>
        window.livewire.on('userAdded', ()=>{
            $('#addModal').modal('hide');
        })

        window.livewire.on('userUpdated', ()=>{
            $('#updateModal').modal('hide');
        })
    </style>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title_2 }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">{{ $title_1 }}</a></li>
                    <li class="breadcrumb-item active">{{ $title_2 }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        @livewire('dashboard.master.user.data-user')

    </section>
    <!-- /.content -->
@endsection