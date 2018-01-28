@extends('master')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h5>Items</h5>
    </div>
    <div class="pull-right">
      <a href="{{ route('items.index') }}" class="btn btn-success">Kembali</a>
    </div>
  </div>
</div>
{!! Form::open(['method' => 'POST','action' => 'ItemController@store']) !!}
  <div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title',null, ['class' => 'form-control', 'placeholder'=>'Enter a title..', 'required']) !!}
  </div>

    <div class="form-group">
      {!! Form::label('description', 'Description') !!}
      {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder'=>'Enter a description..', 'required']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
