@extends('layouts.master')


@section('content')

<div class="container-fluid py-5">
    <div class="container">
        <center>
            <div class="row ">
                <div class="col">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <i class="fa fa-check"></i> {{ session()->get('success') }}
                    </div>
                    @endif
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                        </div>
                        <!-- message error validation -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope>{{__('home.author')}}</th>
                                        <th scope>{{__('home.title')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ebook as $book)
                                    <tr>
                                        <td>{{$book->author}} </td>
                                        <td><u><a href="/home/{{$book->ebook_id}}/detail/{lang}">{{$book->title}}
                                                </a></u></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </center>
</div>

@endsection