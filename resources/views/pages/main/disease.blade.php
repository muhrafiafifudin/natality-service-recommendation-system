@extends('layouts.app')

@section('title')
    Penyakit
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Penyakit</h4>
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
                            <a href="#">Data Master</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Penyakit</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Penyakit</h4>

                                    @role('admin')
                                        <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addDisease">
                                            <i class="fa fa-plus mr-2"></i>
                                            Tambah Penyakit
                                        </button>
                                    @endrole

                                    <div class="modal fade" id="addDisease" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('disease.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')

                                                    <div class="modal-header no-bd">
                                                        <h5 class="modal-title">
                                                            <strong>
                                                                Form Tambah Penyakit
                                                            </strong>
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="disease">Penyakit</label>
                                                            <input type="text" class="form-control" name="disease" placeholder="Masukkan Penyakit">
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
                                    <table id="disease-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Penyakit</th>

                                                @role('admin')
                                                    <th width="50px">Aksi</th>
                                                @endrole
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($diseases as $disease)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $disease->disease }}</td>

                                                    @role('admin')
                                                        <td>
                                                            <form action="{{ route('disease.destroy', \Crypt::encrypt($disease->id)) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <div class="form-button-action">
                                                                    <a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#editDisease_{{ $disease->id }}">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>

                                                                    <button type="submit" class="btn btn-link btn-danger">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    @endrole
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    @foreach ($diseases as $disease)
                                        <div class="modal fade" id="editDisease_{{ $disease->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('disease.update', \Crypt::encrypt($disease->id)) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="modal-header no-bd">
                                                            <h5 class="modal-title">
                                                                <strong>
                                                                    Form Ubah Penyakit
                                                                </strong>
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="disease">Penyakit</label>
                                                                <input type="text" class="form-control" name="disease" value="{{ $disease->disease }}" placeholder="Masukkan Penyakit">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer no-bd">
                                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
    <script src="{{ asset('assets/js/pages/main/disease.js') }}"></script>

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
