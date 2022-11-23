@extends('template')

@section('title', 'GiantBooks | Categories')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4>
                                {{ $category->name }}
                            </h4>
                            @foreach($category->books as $b)
                                <div class="col-md-3 mt-2">
                                    <div class="card h-100" style="width: 100%" >
                                        <img src="{{ $b-> image }}" style="object-fit: cover" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$b->title}}</h5>
                                            <p class="card-text">Author : {{$b->author}} ({{$b->year}})</p>
                                        </div>
                                        <a href="{{ url('detail') }}/{{ $b->id }}" class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
