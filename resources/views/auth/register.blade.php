@extends('layouts.menu')

@section('header-content')
    <section class="view intro-2">
        <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <div class="form-header blue-gradient shadow">
                                    <h3>
                                        <i class="fas fa-user-edit mt-2 mb-2"></i> Inscription:</h3>
                                </div>

                                <!--Body-->
                                <form class="md-form" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="md-form mb-0">
                                        <i class="fas fa-id-badge prefix white-text"></i>
                                        <input type="text" id="orangeForm-name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="orangeForm-name">Nom</label>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="md-form mb-0">
                                        <i class="fas fa-envelope prefix white-text"></i>
                                        <input type="text" id="orangeForm-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="orangeForm-email">Adresse mail</label>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="md-form mb-0">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-pass" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <label for="orangeForm-pass">Mot de passe</label>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="md-form mb-0">
                                        <i class="fas fa-lock prefix white-text"></i>
                                        <input type="password" id="orangeForm-password_confirmation" class="form-control" name="password_confirmation" required  autocomplete="new-password">
                                        <label for="orangeForm-password_confirmation">Confirmer le mot de passe</label>
                                    </div>


                                    <div class="text-center">
                                        <button class="btn blue-gradient btn-lg">S'inscrire</button>
                                        <div class="md-form mb-0">
                                            <p class="white-text text-center small">En cliquant sur <span class="font-italic">S'inscrire</span> j'accepte les CGU du site.</p>
                                        </div>
                                        <hr>
                                        <a class="btn btn-link white-text" href="{{ route('login') }}">
                                            Déjà inscrit ?
                                        </a>
                                        {{--                                <hr>--}}
                                        {{--                                <div class="inline-ul text-center d-flex justify-content-center">--}}
                                        {{--                                    <a class="p-2 m-2 fa-lg tw-ic">--}}
                                        {{--                                        <i class="fab fa-twitter white-text"></i>--}}
                                        {{--                                    </a>--}}
                                        {{--                                    <a class="p-2 m-2 fa-lg li-ic">--}}
                                        {{--                                        <i class="fab fa-linkedin-in white-text"> </i>--}}
                                        {{--                                    </a>--}}
                                        {{--                                    <a class="p-2 m-2 fa-lg ins-ic">--}}
                                        {{--                                        <i class="fab fa-instagram white-text"> </i>--}}
                                        {{--                                    </a>--}}
                                        {{--                                </div>--}}
                                    </div>
                                </form>


                            </div>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .intro-2 {
            background: url("https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/solar-panels-in-sunset-background-royalty-free-image-914449740-1544734734.jpg")no-repeat center center;
            background-size: cover;
        }

        .card {
            background-color: rgba(229, 228, 255, 0.5);
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }

        html,
        body,
        header,
        .view {
            height: 100vh;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view  {
                height: 650px;
            }
        }

        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/
        }



        .md-form .form-control {
            color: #fff;
        }

        @-webkit-keyframes autofill {
            to {
                color: #ffffff;
                background: transparent; } }

        @keyframes autofill {
            to {
                color: #ffffff;
                background: transparent; } }

        input:-webkit-autofill {
            -webkit-animation-name: autofill;
            animation-name: autofill;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both; }

        .checkbox-teal [type="checkbox"]:checked+label:before {
            border-color: transparent #009688 #009688 transparent;
        }
    </style>
@endsection
