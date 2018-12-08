@extends('layout.bootstrap-authentication')
<?php
/** @var \Collective\Html\FormBuilder $form */
$form = \Collective\Html\FormFacade::getFacadeRoot();
?>
@section('head-title')
    <title>Lost</title>
@endsection

@section('head-description')
    <meta name="description" content="Lost">
@endsection

@section('body-content')
    @parent
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('root')}}">
                    <span style="color: #ff9800!important;">Truthfulness</span>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul style="font-family: Viga,serif;" class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('root')}}">Kembali Ke Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('student.auth.register.create')}}">Daftar Akun Siswa</a>
                    </li>
                    <li>
                        <a href="{{route('counselor.auth.register.create')}}">Daftar Akun Konselor</a>
                    </li>
                    <li>
                        <a href="{{route('student.auth.login.get')}}">Masuk Akun Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="registrationform">
                {!! $form->open(['route' => 'counselor.auth.lost.post', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <fieldset>
                    <legend style="font-family: Yatra One,serif; color: #ff9800!important;">Form Permintaan Perubahan Password
                        <i class="fa fa-pencil pull-right"></i>
                    </legend>
                    <div class="form-group">
                        <label for="nis" class="col-lg-12 control-label" style="font-size: medium; text-align: left">
                            NIP / NIK
                        </label>
                        <div class="col-lg-12">
                            {!! $form->input('text','credential', null, ['placeholder' => 'NIP / NIK Anda', 'required'=> true, 'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            {!! $form->button('Proses', ['type' => 'Submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </fieldset>
                {!! $form->close() !!}
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
            <div id="banner">
                <h5></h5>
            </div>
        </div>
    </div>
@endsection

@section('head-css-post')
    @parent
    <link rel="stylesheet" href="{{asset('/assets/css/layout/counselor/auth/lost/counselor_auth_lost_theme_1.min.css')}}">
@endsection

@section('body-js-lower-post')
    @parent
    <script type="text/javascript" src="{{asset('/assets/js/layout/counselor/auth/lost/counselor_auth_lost_theme_1.min.js')}}"></script>
@endsection
