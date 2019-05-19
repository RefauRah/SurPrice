@extends('admina.base')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Tambah</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Produk</h3>
            </div>
            <hr>
            <form action="{{route('produk.store')}}" enctype="multipart/form-data" method="post" novalidate="novalidate">
            {{ csrf_field() }}
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Nama Produk</label>
                    <input id="cc-name" name="nama_produk" type="text" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Asal Produk</label>
                    <input id="cc-name" name="asal" type="text" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Link Produk</label>
                    <input id="cc-name" name="link" type="text" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Gambar Produk</label>
                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Harga Produk</label>
                    <input id="cc-name" name="harga" type="text" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-plus fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Tambah</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection