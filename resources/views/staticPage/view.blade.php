@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$page->title}}</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6"><img src="{{$page->preview->url()}}" alt="" class="img-thumbnail"></div>
                            <div class="col-md-6">{!! $page->content !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
