@extends('layouts.admin')

@section('title', 'Admin Kasir')

@section('content')
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Laporan</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Daftar laporan penjualan</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover dataTable table-striped w-full text-center" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Berat</th>
                                                    <th>Total</th>
                                                    <th>Kasir</th>
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
                </section>
            </div>
@endsection

@section('script')
<script>
$.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
    var table1;
    $(function() {
        table1 = $('#table1').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/laporan/laporan_pembelian') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'tanggal', name: 'tanggal'},
                {data: 'berat', name: 'berat'},
                {data: 'total', name: 'total'},
                {data: 'kasir', name: 'kasir'}
            ]
        });
    });
</script>
@endsection