@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit StaticPage</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($staticPage, ['route' => ['admin.staticPages.update', $staticPage->id], 'method' => 'patch']) !!}

            @include('admin.staticPages.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection