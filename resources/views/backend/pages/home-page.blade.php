@extends('backend.layouts.header')

@section('pushcss')

@endsection

    @section('content')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Home Page </h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Home Page </li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        @include('backend.pages.sections.banner')
        @include('backend.pages.sections.projects')
        @include('backend.pages.sections.sectors')
    </section>


    @endsection


@section('pushjs')

@endsection
