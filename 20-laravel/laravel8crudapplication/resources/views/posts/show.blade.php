@extends('posts.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address Line 1:</strong>
                {{ $post->address_line1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address Line 2:</strong>
                {{ $post->address_line2 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                {{ $post->city }}
            </div>
        </div>
        @empty(!$post->email_id)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $post->email_id }}
                </div>
            </div>
        @endempty
        @empty(!$post->mobile)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile:</strong>
                    {{ $post->mobile }}
                </div>
            </div>
        @endempty
        @empty(!$post->adhar_number)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adhar Number:</strong>
                    {{ $post->adhar_number }}
                </div>
            </div>
        @endempty
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Education:</strong>
                {{ $post->education }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marks:</strong>
                {{ $post->marks }}
            </div>
        </div>
    </div>
@endsection