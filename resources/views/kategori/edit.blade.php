@extends('admina.base')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Tambah</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Tambah Katgeori</h3>
            </div>
            <hr>
            <form action="{{route('kategori.update',$kategori->id)}}" method="post" novalidate="novalidate">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Nama Kategori</label>
                    <input id="cc-name" name="nama_kategori" type="text" value="{{$kategori->nama_kategori}}" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">edit</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection