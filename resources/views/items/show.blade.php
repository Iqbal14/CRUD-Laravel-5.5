@extends('master')

@section('content')
  <br><br>
  <div class="row">
      <div class="form-group">
        <strong>Title:</strong> {{ $item -> title }}
      </div>

      <div class="form-group">
        <strong>Description:</strong> {{ $item -> description }}
      </div>
      <div class="form-group">
        <strong>Created at</strong> {{ $item -> created_at ->diffForhumans() }}
      </div>
      <div class="form-group">
        <strong>Update ad</strong> {{ $item -> updated_at ->diffForhumans()  }}
      </div>
  </div>
@endsection
