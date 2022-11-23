@extends('template')

@section('title', 'GiantBooks | Collection')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4 mb-1">
                <h1 class="h1" style="text-align:center; color: brown" >Home</h1>
            </div>

            <!-- Content Here -->
            @foreach($book as $b)
                <div class="col-md-4 mt-4 mb-4">
                    <div class="card h-100" style="width: 100%" >
                        <img src="{{ $b-> image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$b->title}}</h5>
                            <p class="card-text">Author : {{$b->author}} ({{$b->year}})</p>
                        </div>
                        <a href="{{ url('detail.book') }}/{{ $b->id }}" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
