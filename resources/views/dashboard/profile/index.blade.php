{{--TODO: start layout --}}
@extends('dashboard.layout.master')
{{-- fro title page--}}
@section('title')
    {{trans('links/lang.profile')}}
@endsection

{{-- for content header--}}
@section('content_header')
    <div class=" profile_card col">
        {{--        <h6 class="">{{trans('content.home')}}</h6>--}}
        <ol class="breadcrumb">
            <li><a href="{{route('ecommerce.index_admin')}}">{{trans('content.home')}}</a></li>
            <li>&nbsp / &nbsp</li>
            <li>{{trans('profile/lang.acct_deets')}}</li>

        </ol>
    </div>
@endsection

{{--TODO: start content --}}
@section('content')
    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <form method="get" action="{{route('dashboard.profile')}}">
            @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0 picture_card">
                    <div class="card-header">{{trans('profile/lang.pic_profile')}}</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                             src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="picture profile">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">{{trans('profile/lang.acct_deets')}}</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">{{trans('profile/lang.user_name')}}</label>
                                <input class="form-control" id="inputFirstName"  type="text"
                                       value="{{Auth::user()->name }}">
                            </div>
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">{{trans('profile/lang.user_email')}}</label>
                                <input class="form-control" id="inputOrgName" type="email"
                                       value="{{Auth::user()->email }}">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">{{trans('profile/lang.user_address')}}</label>
                                <input class="form-control" id="inputBirthday"  type="text" name="birthday"
                                       value="{{Auth::user()->address }}">
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">{{trans('profile/lang.user_phone')}}</label>
                                <input class="form-control" id="inputPhone"  type="tel"
                                       placeholder="Enter your phone number" value="{{Auth::user()->phone }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 m-auto">
                <button type="submit" class="w-100 btn btn-primary">{{trans('content/lang.update')}}</button>
            </div>
        </div>
        </form>
    </div>
@endsection
{{--TODO: end content --}}
