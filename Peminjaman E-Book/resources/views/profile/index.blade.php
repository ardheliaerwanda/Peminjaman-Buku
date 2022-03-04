@extends('layouts.master')

@section('content')

<div class="container-fluid py-5 ">
    <div class="container">
        <div class="row ">
            <!-- ISI -->
            <div class="col-4">
                <img src="{{ asset('admin/assets/img/' . $loggedIn->display_picture_link) }}" alt="image">
            </div>
            <div class="col-8" style="float:right;">
                <!-- <div class="panel"> -->
                <!-- <div class="panel-body"> -->
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
                <form action="/profile/{{$loggedIn->account_id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="FirstName" class="col-sm-2 col-form-label"> {{__('profile.frst')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="first_name" value="{{$loggedIn->first_name}}"
                                name="first_name">
                        </div>
                        <label for="MiddleName" class="col-sm-2 col-form-label">{{__('profile.mddl')}}:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="middle_name" value="{{$loggedIn->middle_name}}"
                                name="middle_name">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="LastName" class="col-sm-2 col-form-label">{{__('profile.lst')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="last_name" value="{{$loggedIn->last_name}}"
                                name="last_name">
                        </div>
                        <label for="Email" class="col-sm-2 col-form-label">{{__('profile.email')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" value="{{$loggedIn->email}}"
                                name="email">
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label class="control-label col-md-2 col-sm-2 ">{{__('profile.gender')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <div id="gender_id">
                                <label>
                                    <input type="radio" name="gender_id" value="1" class="join-btn" id="gender_id"
                                        data-parsley-multiple="gender" {{ $loggedIn->gender_id == 1 ? 'checked' : '' }}> &nbsp; {{__('profile.male')}} &nbsp;
                                </label>
                                <label>
                                    <input type="radio" name="gender_id" value="2" class="join-btn" id="gender_id"
                                        data-parsley-multiple="gender" {{ $loggedIn->gender_id == 2 ? 'checked' : '' }}> {{__('profile.fem')}}
                                </label>
                            </div>
                        </div>
                        <label class="control-label col-md-2 col-sm-2 ">{{__('profile.role')}}<span>:</span></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="role_id" value=" {{ ($loggedIn->role_id == 1) ? 'User' : 'Admin'}}" name="role_id" disabled>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="form-group row">
                        <label for="Password" class="col-sm-2 col-form-label">{{__('profile.password')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="password"
                                value="{{ $loggedIn->password }}" name="password">
                        </div>
                        <label for="Picture" class="col-sm-2 col-form-label">{{__('profile.picture')}}<span
                                class="required">:</span></label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control-file" id="display_picture_link" name="display_picture_link" value="{{ asset('admin/assets/img/' . $loggedIn->display_picture_link) }}"> {{ $loggedIn->display_picture_link }} 
                            <img src="{{ asset('admin/assets/img/' . $loggedIn->display_picture_link) }}" alt="foto" width="20" height="20" class="img-fluid img-thumbnail">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning">{{__('profile.save')}}</button>
                </form>
                <!-- </div>
						</div> -->
            </div>
        </div>
    </div>
</div>
@endsection