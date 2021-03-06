@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>สร้างประเภทของงานบริการ</h2>
    <form action="{{route('create')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
    <div class="container-fluid">
    <div class="row mt-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">ชื่อหมวดหมู่</th>
                <th scope="col">วันที่สร้าง</th>
                <th scope="col">อัพเดตล่าสุด</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categories)
            <tr>
                <th scope="row">{{$categories->category_id}}</th>
                <td>{{$categories->name}}</td>
                <td>{{$categories->created_at}}</td>
                <td>{{$categories->updated_at}}</td>
                <td>
                    <a href="{{url('/admin/category/Edit/'.$categories->category_id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/admin/category/Delete/'.$categories->category_id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    </div>
</div>
@endsection