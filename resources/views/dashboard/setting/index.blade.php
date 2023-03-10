{{--TODO: start layout --}}
@extends('dashboard.layout.master')
{{-- fro title page--}}
@section('title')
    {{trans('links/lang.setting')}}
@endsection

{{-- for content header--}}
@section('content_header')
    <div class=" profile_card col">
        {{--        <h6 class="">{{trans('content.home')}}</h6>--}}
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard.index_admin')}}">{{trans('content/lang.home')}}</a></li>
            <li>&nbsp / &nbsp</li>
            <li>{{trans('setting/lang.settings')}}</li>

        </ol>
    </div>
@endsection

{{--TODO: start content --}}
@section('content')
    <div class="container">
        <div class="row gutters">
            <form class="w-100" action="{{route('dashboard.update',$setting->id)}}" method="post" enctype="multipart/form-data">
           @csrf
           @method('put')
                @if($errors->any())
                    {{ implode('', $errors->all(':message')) }}
                @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-3 text-primary">{{ __('setting/lang.details') }}</h6>
                            </div>
                            {{-- title ecommerce--}}
                            <div class="col-xl-4 col-lg-4col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="fullName">{{ __('setting/lang.title') }}</label>
                                    <input value="{{$setting->title}}" type="text" name="title" class="form-control" id="fullName"
                                           placeholder="{{ __('setting/lang.placeholder_title') }}">
                                </div>
                            </div>
                            {{-- address ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="eMail">{{ __('setting/lang.address') }}</label>
                                    <input value="{{$setting->address}}"  type="text" name="address" class="form-control" id="eMail"
                                           placeholder="{{ __('setting/lang.placeholder_address') }}">
                                </div>
                            </div>
                            {{-- phone ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="phone">{{ __('setting/lang.phone') }}</label>
                                    <input value="{{$setting->phone}}" type="text" name="phone" class="form-control" id="phone"
                                           placeholder="{{ __('setting/lang.placeholder_phone') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            {{-- whatsapp url ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="whatsapp">{{ __('setting/lang.whatsapp')}}</label>
                                    <input value="{{$setting->whatsapp}}" type="url" name="whatsapp" class="form-control" id="whatsapp"
                                           placeholder="{{ __('setting/lang.placeholder_whatsapp')}}">
                                </div>
                            </div>
                            {{-- facebook url ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="facebook">{{ __('setting/lang.facebook')}}</label>
                                    <input value="{{$setting->facebook}}" type="url" name="facebook" class="form-control" id="facebook"
                                           placeholder="{{ __('setting/lang.placeholder_facebook')}}">
                                </div>
                            </div>
                            {{-- linkedin url ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="linkedin">{{ __('setting/lang.linkedin')}}</label>
                                    <input value="{{$setting->linkedin}}" type="url" name="linkedin" class="form-control" id="linkedin"
                                           placeholder="{{ __('setting/lang.placeholder_linkedin')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            {{-- description ecommerce--}}
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                <div class="form-group">
                                    <label
                                        for="exampleFormControlTextarea3">{{ __('setting/lang.description') }}</label>
                                    <textarea  class="form-control" name="description" id="exampleFormControlTextarea3"
                                              placeholder="{{ __('setting/lang.placeholder_description') }}"
                                              rows="3">{{$setting->description}}</textarea>
                                </div>
                            </div>
                            {{-- icon ecommerce--}}
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="form-group">
                                    <img class="image_book" src="{{asset('storage/app/public/image/' . $setting->icon)}}" alt="">
                                    <input type="file" name="icon" class="form-control" id="icon">
                                </div>
                            </div>

                            {{--                            <div class="p-2 text-center col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">--}}
{{--                                <div class="col-6  m-auto">--}}
{{--                                    <!-- Profile picture image-->--}}
{{--                                    @if($setting->icon === NULL)--}}
{{--                                        <img  class=" icon_ecommerce rounded-circle mb-2"--}}
{{--                                              src="https://bootdey.com/img/Content/avatar/avatar1.png"  alt="">--}}
{{--                                    @else--}}
{{--                                        <img  class=" icon_ecommerce rounded-circle mb-2"--}}
{{--                                              src="https://bootdey.com/img/Content/avatar/avatar1.png"  alt="">--}}
{{--                                    @endif--}}
{{--<input name="icon" type="file" class="buttons">--}}
{{--                                </div>--}}


{{--                            </div>--}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit"
                                            class="btn btn-primary w-50">{{ __('general/lang.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection
{{--TODO: end content --}}
