@extends('template')

@section('title', 'GiantBooks | Book Detail')

@section('content')
    <div class="container mb-4">
        <div class="row ">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 ">
                                <img src="{{ $detail-> image }}" class="rounded mx-auto d-block" width="100%" alt="...">
                            </div>
                            <div class="col-md-6 ">
                                <h4>{{ $detail->title }}</h4>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Author</td>
                                        <td>:</td>
                                        <td>{{ $detail->author }}</td>
                                    </tr>
                                    <tr>
                                        <td>Year</td>
                                        <td>:</td>
                                        <td>{{ $detail->year }}</td>
                                    </tr>
                                    <p>
                                    <p>{{ $detail->synopsis }}</p>
                                    </p>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
