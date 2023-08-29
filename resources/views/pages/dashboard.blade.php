@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Selamat Datang, {{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Selamat datang di aplikasi pelayanan natalitas ibu hamil puskesmas weru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
