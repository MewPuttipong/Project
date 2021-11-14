@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>Edit New Service</h2>
    <form action="{{url('/admin/category/Update/'.$category->category_id)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection