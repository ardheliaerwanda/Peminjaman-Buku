@extends('layouts.master')


@section('content')

<div class="container-fluid py-5 " >
        <div class="container"> <center>
            <div class="row ">
                <div class="col">
                    <div class="section-title">
                        
                    </div>
                    <!-- ISI -->
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
                                <!-- end message error validation -->
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope>{{__('account.account')}}</th>
                                                <th scope>{{__('account.action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $user)
                                                <tr>
                                                    <td>{{$user->first_name}} - {{ ($user->role_id == 1) ? 'User' : 'Admin'}}
                                                    </td>
                                                    <td>
                                                        <u><a href="/account-maintenance/{{$user->account_id}}/edit/{lang}" > {{__('account.update')}}</a></u> &emsp;
                                                        <u><a href="/account-maintenance/{{$user->account_id}}/delete" > {{__('account.delete')}}</a></u>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
                </div>
            </div>
        </div></center>
</div>

@endsection