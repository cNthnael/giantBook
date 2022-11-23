@extends('template')

@section('title', 'GiantBooks | Publisher')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-4 mb-1">
                <h1 class="h1" style="text-align:center; color: brown" >Publisher</h1>
            </div>

            <!-- Content Here -->
            @foreach($publish as $p)
                <div class="col-md-6 mt-4" >
                    <div class="card h-100" style="width: 100%" >
                        <div class="card-body">
                            <h5 class="card-title">{{$p->name}}</h5>
                            <a href="{{ url('detail.index') }}/{{ $p->id }}" class="btn btn-danger">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
