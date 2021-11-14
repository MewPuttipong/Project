@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>Create New Service</h2>
    <form action="{{route('create')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Service Name">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection