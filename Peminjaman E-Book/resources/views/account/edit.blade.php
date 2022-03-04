@extends('layouts.master')


@section('content')

<div class="container-fluid py-5" >
        <div class="container"> 
            <div class="row ">
                <div class="col-12">
                    <div class="section-title">
                        
                    </div>
                    <!-- MAIN -->
                    <form action="/account-maintenance/{{$user->account_id}}/update/{lang}" method="POST" >
                    {{csrf_field()}}
                        <label class="control-label col-md-2 col-sm-2 "> <?php echo "{$user->first_name}";?> </label><br> <br>
                        <div class="form-group row">
                            <label class="control-label col-md-1 col-sm-2 ">{{__('account.role')}} <span class="required">:</span></label>
                            <div class="col-sm-8">
                                <select name ="role_id" id="role_id" class="custom-select col-md-4 col-sm-4 " required>
                                    <option selected disabled value="{{$user->role_id}}"> {{ ($user->role_id == 1) ? 'User' : 'Admin'}} </option>
                                    <option value="1">{{__('account.user')}}</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                       <button type="submit" class="btn btn-warning" style="margin-left:70px;">{{__('account.save')}}</button>
                    </form>	
                    <!-- ENDMAIN -->
                </div>
            </div>
        </div>
</div>

@endsection