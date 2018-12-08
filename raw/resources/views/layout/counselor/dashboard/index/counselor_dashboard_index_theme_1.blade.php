@extends('layout.counselor.extension.adminlte-sidebar')
<?php
/** @var \Collective\Html\FormBuilder $form */
$form = \Collective\Html\FormFacade::getFacadeRoot();
?>
@section('head-title')
    <title>Dashboard</title>
@endsection

@section('head-description')
    <meta name="description" content="Dashboard">
@endsection

@section('body-content')
    @parent
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Selamat Datang
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-home"></i>
                    Dashboard
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modal-upload">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        {!! $form->open(['route' => 'counselor.home.dashboard.upload', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Upload Data Siswa</h4>
                        </div>
                        <div class="modal-body">
                            <span class="control-fileupload">
                              <label for="fileInput">Choose a file :</label>
                              <input type="file" name="students" accept=".xlsx,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="fileInput">
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                        {!! $form->close() !!}
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dashboard</h3>
                    <div class="box-tools pull-right">
                        {!! link_to_route('counselor.home.dashboard.download', $title = 'Download Template', $parameters = [], $attributes = ['class' => 'btn btn-success btn-sm', 'type' => 'button', 'role' => 'button']); !!}
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-upload">
                            <i class="fa fa-upload"></i>&nbsp;Upload Data Siswa
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <table id="students" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Email</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Sekolah</th>
                            <th>Kelas</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(/** @var \App\Eloquent\User $user */$students as $k => $student)
                            <?php
                            /** @var \App\Eloquent\User $student */
                            /** @noinspection PhpUndefinedVariableInspection */
                            ?>
                            <tr>
                                <td>{{$k + 1}}</td>
                                <td>{{ $student->getAttribute('credential') }}</td>
                                <td>{{ $student->getAttribute('email') }}</td>
                                <td>{{ $student->getAttribute('name') }}</td>
                                <td>{{ $student->getGenderTranslation() }}</td>
                                <td>{{ $student->student()->first()->getAttribute('school') }}</td>
                                <td>{{ $student->student()->first()->getAttribute('grade') }}</td>
                                <td>{{ $student->student()->first()->getAttribute('active') == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <h1>&nbsp;</h1>
                </div>
                <!-- /.box-footer-->
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Kupon</h3>
                </div>
                <div class="box-body">
                    <table id="coupons" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kupon</th>
                            <th>Pembuat</th>
                            <th>Peruntukan</th>
                            <th>Tanggal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(/** @var \App\Eloquent\User $user */$coupons as $k => $coupon)
                            <?php
                            /** @var \App\Eloquent\User $student */
                            /** @noinspection PhpUndefinedVariableInspection */
                            $user = $coupon->getAttribute('users');
                            ?>
                            <tr>
                                <td>{{$k + 1}}</td>
                                <td>{{$coupon->getAttribute('coupon')}}</td>
                                <td>{{$user->getAttribute('name')}}</td>
                                <td>{{$coupon->getHumanReadableUsage()}}</td>
                                <td>{{___d($coupon->getAttribute('created_at')->formatLocalized('%e %B %Y %H:%M'))}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <h1>&nbsp;</h1>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('head-css-post')
    @parent
    @include('shard.datatable.datatable-css')
    <link rel="stylesheet" href="{{asset('/assets/css/layout/counselor/dashboard/index/counselor_dashboard_index_theme_1.min.css')}}">
@endsection

@section('body-js-lower-post')
    @parent
    @include('shard.datatable.datatable-js')
    <script type="text/javascript" src="{{asset('/assets/js/layout/counselor/dashboard/index/counselor_dashboard_index_theme_1.min.js')}}"></script>
@endsection
