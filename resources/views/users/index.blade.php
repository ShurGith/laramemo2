@extends('layouts.main')
@section('content')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header"><h4>User List</h4></div>
      <div class="card-body" id="table-data">
        
        <table class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{!! Avatar::create($user->name)->setDimension(35, 35)->setFontSize(15)->toSvg() !!} {{ $user->name }}</td>
              <td>{{ $user->email }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        
        {{ $users->links() }}
      
      </div>
    </div>
  </div>
@endsection