@extends('layouts.admin')

@section('content')
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Master Tiket </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route('dashboard.ticket.create') }}"
                                    class="btn btn-success btn-sm mb-3 btn-round"><i class="feather icon-plus"></i>
                                    Tambah Tiket</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0 lara-dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Tiket</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $item)
                                        <tr>
                                            <td width="10">{{ $loop->iteration }}</td>
                                            <td>{{ $item->ticket_name }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ number_format($item->price, 2, ",", ".") }}</td>
                                            <td>
                                                <p
                                                    style="background-color: lightgreen; border-radius:5px; text-align:center">
                                                    {{ $item->stock < 2 ? $item->ticket_status = "Habis" : "Tersedia" }}
                                                </p>
                                            </td>
                                            <td>
                                                <a href=" {{ route('dashboard.ticket.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form method="POST"
                                                    action="{{ route('dashboard.ticket.destroy', $item->id) }}"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm delete-button">Delete</button>
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
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection