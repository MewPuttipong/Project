@extends('layouts.app')

@section('content')

<div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color: #1F27F21A" class="card-header"><h2><strong>My Profile</strong></h2></div>

                <div style="background-color: #1F27F21A" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p><strong>Name:</strong> {{Auth::user()->name}}<p>
                        <p><strong>Email:</strong> {{Auth::user()->email}}<p>
                        <p><strong>Phone:</strong> {{Auth::user()->phone}}<p>
                        <p><strong>Address:</strong> {{Auth::user()->address}}<p>
                    <a style="color: white" href="{{route('index')}}" class="btn btn-primary">Product Management</a>
                    <a style="color: white" href="" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
