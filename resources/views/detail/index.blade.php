@extends('template')

@section('title', 'GiantBooks | Publisher Detail')

@section('content')
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 ">
                                <h4>{{ $publish->name }}</h4>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $publish->address }}</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td>{{ $publish->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $publish->email }}</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <h4>
                            Buku Terbitan {{ $publish->name }}
                        </h4>
                            @foreach($publish->books as $b)
                                <div class="col-md-3 mt-2">
                                    <div class="card h-100" style="width: 100%" >
                                        <img src="{{ $b-> image }}" style="object-fit: cover" class="card-img-top" alt="...">
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
                </div>
            </div>
        </div>
    </div>
@endsection
