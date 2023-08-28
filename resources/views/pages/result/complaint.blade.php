@extends('layouts.app')

@section('title')
    Rekomendasi Keluhan Sakit
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Rekomendasi Keluhan Sakit</h4>
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
                            <a href="#">Rekomendasi Keluhan Sakit</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Rekomendasi Keluhan Sakit</h4>
                                    <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addCriteria">
                                        <i class="fa fa-plus mr-2"></i>
                                        Tambah Rekomendasi Keluhan Sakit
                                    </button>

                                    <div class="modal fade" id="addCriteria" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width: 800px">
                                            <div class="modal-content">
                                                <form action="{{ route('complaint.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')

                                                    <div class="modal-header no-bd">
                                                        <h5 class="modal-title">
                                                            <strong>
                                                                Form Tambah Rekomendasi Keluhan Sakit
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

                                                        @foreach ($criterias as $criteria)
                                                            <div class="form-check">
                                                                <label>{{ $criteria->criteria }}</label><br/>

                                                                @foreach ($criteria->sub_criterias as $sub_criteria)
                                                                    <label class="form-radio-label">
                                                                        <input class="form-radio-input" type="radio" name="sub_criteria_id_{{ $sub_criteria->id }}" value="{{ $sub_criteria->id }}">
                                                                        <span class="form-radio-sign">{{ $sub_criteria->sub_criteria }}</span>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        @endforeach

                                                        <div class="form-group">
                                                            <label for="criteria">Detail Keluhan Yang Dialami</label>
                                                            <textarea class="form-control" name="description" rows="5"></textarea>
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
                                    <table id="complaint-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Nama Pasien</th>
                                                <th>Sakit Yang Dialami</th>
                                                <th>Keluhan</th>
                                                <th>Solusi Yang Disarankan</th>
                                                <th width="50px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($complaints as $complaint)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $complaint->user->name }}</td>
                                                    <td>{{ $complaint->disease->disease }}</td>
                                                    <td>{{ $complaint->description }}</td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($complaint->disease->prevention as $prevention)
                                                                <li>{{ $prevention->prevention }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('complaint.destroy', \Crypt::encrypt($complaint->id)) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <div class="form-button-action">
                                                                <button type="submit" class="btn btn-link btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
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
    <script src="{{ asset('assets/js/pages/result/complaint.js') }}"></script>

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
