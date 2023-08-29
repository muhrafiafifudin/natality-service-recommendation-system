@extends('layouts.app')

@section('title')
    Detail Rekomendasi Penanganan
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Detail Rekomendasi Penanganan</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Hasil Rekomendasi</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Detail Rekomendasi Penanganan</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Detail Rekomendasi Penanganan</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="complaint-detail-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Kriteria</th>
                                                <th>Hasil Pengisian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complaint->complaint_details as $complaint_detail)
                                                <tr>
                                                    <td>{{ $complaint_detail->sub_criteria->criteria->criteria }}</td>
                                                    <td>{{ $complaint_detail->sub_criteria->sub_criteria }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Kesimpulan Rekomendasi Penanganan</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="complaint-recommendation-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Rekomendasi Penanganan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complaint->complaint_details as $complaint_detail)
                                                <tr>
                                                    <td>{{ $complaint_detail->sub_criteria->prevention->prevention }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('assets/js/pages/result/complaint_detail.js') }}"></script>
@endpush
