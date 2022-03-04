@extends('layouts.master')

@section('content')

<div class="container-fluid py-5 ">
    <div class="container">
        <center>
            <div class="row ">
                <div class="col">
                    <div class="section-title">
                        <h5 class="text-dark">Title</h5><br>
                    </div>
                    <!-- Main -->
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

                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            <i class="fa fa-check"></i> {{ session()->get('success') }}
                        </div>
                        @endif

                        @if ($ebook)
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope>{{__('cart.title')}}</th>
                                        <th scope>{{__('cart.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ebook as $book)
                                    <tr>
                                        <td>{{$book->title}} </td>
                                        <td><u><a href="{{ route('cart.remove', $book->ebook_id) }}">{{__('cart.delete')}}
                                                </a></u>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf

                            @foreach ($listEbookId as $ebookId)
                            <input type="hidden" value="{{ $ebookId }}" name="ebook_id[]">
                            @endforeach
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </form>
                        @else
                        <div class="alert alert-info">

                            <h3>CART IS EMPTY</h3>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>

@endsection