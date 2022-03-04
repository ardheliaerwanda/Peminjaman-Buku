@extends('layouts.master')

@section('content')

<div class="container-fluid py-5" >
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="section-title">
                    <h5 class="text-dark"><u> E-Book Detail</u></h5>
                </div>
                <!-- ISI -->
                <div class="panel">
                    <div class="panel-body">
                        <table border="0" cellpadding="15">
                            <tr>
                                <td>{{__('home.title')}}: </td>
                                <td> {{ $ebook->title }}</td>
                            </tr>
                            <tr>
                                <td>{{__('home.author')}}: </td>
                                <td> {{ $ebook->author }}</td>
                            </tr><br>
                            <tr>
                                <td>{{__('home.desc')}}: </td>
                                <td> {{ $ebook->description }}</td>
                            </tr>
                        </table>
                        <br>

                        <a href="{{ route('cart.rent', $ebook->ebook_id) }}" class="btn btn-warning"
                            style="float:right;">{{__('home.rent')}}</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection