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
    <div class="container-fluid">
        <div class="row mt-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">created_at</th>
                    <th scope="col">update_at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
        </div>
        </div>
</div>
@endsection