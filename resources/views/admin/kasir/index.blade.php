@extends('layouts.admin')

@section('title', 'Admin Kasir')

@section('content')
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Admin Kasir</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Daftar antri pembelian beras</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover dataTable table-striped w-full text-center" id="table1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Harga (Rp)</th>
                                                    <th>Berat (Gram)</th>
                                                    <th>Nominal (Rp)</th>
                                                    <th>Aksi</th>
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
            <form id="form-field" autocomplete="off">
            <div class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Pembelian Beras</h4>
                            <button type="button" class="close" data-bs-dismiss="modal"">×</button>
                            
                        </div>
                        <div class="modal-body">
                            <input name="id" type="hidden" id="id_pembelian" value="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-5 col-5">
                                            <label class="col-form-label">Berat beras (Kg)</label>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <input style="background:none;text-align:center;" type="text"  class="form-control" name="berat" id="berat" placeholder="Berat" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-5 col-5">
                                            <label class="col-form-label">Harga beras (Rp)</label>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <input style="background:none;text-align:center;" type="text" id="harga"  class="form-control" name="harga" placeholder="Masukan harga" disabled>
                                        </div>
                                    </div>
                                    <div style="width:100%;height:2px;background:#8ca4ca;"></div>
                                    <br>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-5 col-5">
                                            <label class="col-form-label">Total pembayaran (Rp)</label>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <input style="background:none;text-align:center;" type="text" id="total" class="form-control" name="total" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect"    data-bs-dismiss="modal">Tidak</button>
                            <button type="button" id="success" data-action="simpan" class="action btn btn-primary me-1 mb-1">Bayar Sekarang</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
            ajax: "{{ url('/admin-kasir/listantrian') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'tanggal', name: 'tanggal'},
                {data: 'harga', name: 'harga'},
                {data: 'berat', name: 'berat'},
                {data: 'nominal', name: 'nominal'},
                {data: 'action', name: 'action'}
            ]
        });
    });
    var mode;

    function show_modal(data) {

        if (mode == "edit") {
            $.ajax({
                url: "{{ url('/admin-kasir') }}/" + data + "/edit",
                dataType: "json",
                type: "GET",
                success: function(data) {
                    $('#form-field').find('input[name="id"]').val(data.id);
                    $('#form-field').find('input[name="berat"]').val(data.berat);
                    $('#form-field').find('input[name="harga"]').val(data.harga);
                    $('#form-field').find('input[name="total"]').val(data.nominal);
                }
            })
            $('#form-field').children('.modal').find('.modal-title').text("Pembelian Beras");
            $('#form-field').children('.modal').modal('show');
        } 
    }

    function reset_default() {
        $('#form-field')[0].reset();
        $('#form-field').find('input[name="id"]').val('');
        mode = undefined;
        table1.ajax.reload(null, false);
        $('#form-field').children('.modal').modal('hide');
    }

    function clear() {
        $('#form-field')[0].reset();
    }

    $(document).on('click', ".action", function() {
        var self = this;

        var action = $(this).attr('data-action');

        if (action == "edit") {
            mode = "edit";
            var data = $(this).attr('data-id');
            show_modal(data);
        } else if (action == "simpan") {
            var nama = $(this).closest("tr").find("td:eq(1)").text();
            var ids = "";
            
            var id = $("input[id='id_pembelian']").val();
            var tipe = "PUT";
            var ids = "/"+id;
        

            $.ajax({
                url: "{{ url('/admin-kasir') }}" + ids,
                dataType: "json",
                data: {
                    _token: '{!! csrf_token() !!}'
                },
                type: tipe,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        swal({
                            title: "Success!",
                            text: data.success,
                            type: "success",
                        });
                    } else {
                        swal({
                            title: "Error!",
                            text: data.error,
                            type: "error",
                        });
                    }

                    reset_default();
                }
            })
        }
    })
</script>
@endsection