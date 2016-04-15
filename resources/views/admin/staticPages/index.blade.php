@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">StaticPages</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('admin.staticPages.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($staticPages->isEmpty())
            <div class="well text-center">No StaticPages found.</div>
        @else
            @include('admin.staticPages.table')
        @endif
        
    </div>
@endsection