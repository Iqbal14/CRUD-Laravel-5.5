@extends('master')

@section('content')
<br><br>
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h5>Items</h5>
    </div>
    <div class="pull-right">
      <a href="{{ route('items.create') }}" class="btn btn-success">Buat Data Baru</a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <tr>
      <th scope="col">{{ $item->id }}</th>
      <th scope="col"> {{ $item->title }}</th>
      <th scope="col"> {{ $item->description }}</th>
      <th scope="col"> {{ $item->created_at }}</th>
      <th scope="col"> {{ $item->updated_at }}</th>

      <th>
        <td>
            <a href="{{ route('items.show', $item->id) }}" class="btn btn-info">Tampilkan</a>
            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
            {!! Form::open(['method'=>'DELETE', 'action'=>['ItemController@destroy', $item->id] , 'style' => 'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

        </td>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
