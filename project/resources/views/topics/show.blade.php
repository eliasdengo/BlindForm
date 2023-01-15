@extends('topics.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h1 class="text-success text-xl-start info-container d-flex flex-column align-items-center justify-content-center">
 
                Show Topic
                 </h1>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('topics.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Topic:</strong>
                {{ $topic->topic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $topic->detail }}
            </div>
        </div>
    </div>
@endsection
