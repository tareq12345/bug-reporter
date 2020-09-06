@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'BugController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::label('feedback', 'FeedBack')}}
            {{Form::textarea('feedback', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'FeedBack'])}}
        </div>
        <div class="form-group">
            {{Form::label('label', 'Label')}}
            {{Form::text('label', '', ['class' => 'form-control', 'placeholder' => 'Label'])}}
        </div>
        <div class="form-group">
            {{Form::label('wrongapproach', 'WrongApproach')}}
            {{Form::textarea('wrongapproach', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'WrongApproach'])}}
        </div>
        <div class="form-group">
            {{Form::label('solution', 'Solution')}}
            {{Form::textarea('solution', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Solution'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection