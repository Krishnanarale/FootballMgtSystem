@extends('layouts.front')

@section('content')
<section class="mbr-section form4 cid-qv5Aq4h3k3" id="form4-2y" data-rv-view="9854">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map m-4"><iframe frameborder="0" style="border:0; height:550px; width:500px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                {!! $content->content !!}
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
                    <form class="block mbr-form" action="/contact-form  " method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="VyfBhjXY/U/Zmt1Pt1h8AUq3OZw8hzMN2LHhS02AKmRlJXOXYztQHFLe4ZtOqtsGZcolY6Zc/k02XjN6+grxxBoiXlO8zOY2aPEWv+XteZzFKh7BTcuG/y+UuTZ6thxI">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 multi-horizontal mb-2" data-for="name">
                                <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" placeholder="Your Name" id="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" placeholder="Your Phone" id="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-2" data-for="email">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Id">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control form-control-user @error('message') is-invalid @enderror" name="message" placeholder="Message" id="message">{{ old('message') }}</textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @if (Session::has('status'))
                            <div class="col-md-12">
                                <strong class="text-success">{{Session::get('status')}}</strong>
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="col-md-12">
                                <strong class="text-danger">{{Session::get('error')}}</strong>
                            </div>
                            @endif
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-primary btn-form display-4 float-right">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection