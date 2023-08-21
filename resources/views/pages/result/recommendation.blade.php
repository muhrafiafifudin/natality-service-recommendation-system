@extends('layouts.app')

@section('title')
    Rekomendasi Rujukan
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Rekomendasi Rujukan</h4>
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
                            <a href="#">Rekomendasi Rujukan</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Rekomendasi Rujukan</h4>
                                    <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addCriteria">
                                        <i class="fa fa-plus mr-2"></i>
                                        Tambah Rekomendasi Rujukan
                                    </button>

                                    <div class="modal fade" id="addCriteria" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width: 1200px">
                                            <div class="modal-content">
                                                <form action="{{ route('criteria.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')

                                                    <div class="modal-header no-bd">
                                                        <h5 class="modal-title">
                                                            <strong>
                                                                Form Tambah Rekomendasi Rujukan
                                                            </strong>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="criteria">Nama Pasien</label>
                                                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="criteria">Alamat</label>
                                                                    <input type="number" class="form-control" value="{{ Auth::user()->address }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="table-responsive mt-lg-5">
                                                            <table id="input-recommendation-table" class="display table table-striped table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Pertanyaan</th>
                                                                        <th>Jawaban</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php $no = 1; @endphp
                                                                    @foreach ($criterias as $criteria)
                                                                        <tr>
                                                                            <td>{{ $no++ }}</td>
                                                                            <td>{{ $criteria->criteria }}</td>
                                                                            <td>
                                                                                <div class="col-lg-4 col-md-9 col-sm-8 d-flex align-items-center">
                                                                                    <div class="custom-control custom-radio">
                                                                                        <input type="radio" id="ya_{{ $criteria->id }}" value="Ya" name="criteria[criteria_{{ $criteria->id }}]" class="custom-control-input">
                                                                                        <label class="custom-control-label" for="ya_{{ $criteria->id }}">Ya</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio">
                                                                                        <input type="radio" id="tidak_{{ $criteria->id }}" value="Tidak" name="criteria[criteria_{{ $criteria->id }}]" class="custom-control-input">
                                                                                        <label class="custom-control-label" for="tidak_{{ $criteria->id }}">Tidak</label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer no-bd">
                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="recommendation-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Nama Pasien</th>
                                                <th>Alamat</th>
                                                <th>Hasil</th>
                                                <th>Rujukan</th>
                                                <th width="50px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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
    <script src="{{ asset('assets/js/pages/result/recommendation.js') }}"></script>

    @if($message = Session::get('success'))
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.success("{{ $message }}");
            })
        </script>
    @endif

    @if ($message = Session::get('error'))
        <script type="text/javascript">
            $(document).ready(function() {
                toastr.error("{{ $message }}");
            })
        </script>
    @endif
@endpush