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
                                        <h4>Pembelian Beras</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-5 col-5">
                                                        <label class="col-form-label">Berat beras (Kg)</label>
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <input style="background:none;text-align:center;" type="text" id="berat" class="form-control" name="berat" placeholder="5" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-5 col-5">
                                                        <label class="col-form-label">Harga beras (Rp)</label>
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <input style="background:none;text-align:center;" type="text" id="harga" onkeyup="sum();"class="form-control" name="harga" placeholder="" >
                                                    </div>
                                                </div>
                                                <div style="width:100%;height:2px;background:#8ca4ca;"></div>
                                                <br>
                                                <div class="form-group row align-items-center">
                                                    <div class="col-lg-5 col-5">
                                                        <label class="col-form-label">Total pembayaran (Rp)</label>
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <input style="background:none;text-align:center;" type="text" id="total" class="form-control" name="harga" value="" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button id="success" class="pay btn btn-primary me-1 mb-1">Bayar Sekaran</button>
                                                </div>
                                            </div>
                                        </div>
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
function sum() {
      var txtFirstNumberValue = 5;
      var txtSecondNumberValue = document.getElementById('harga').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>
@endsection