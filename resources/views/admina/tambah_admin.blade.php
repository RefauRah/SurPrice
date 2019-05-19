@extends('admina.base')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Register</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Admin Register</h3>
            </div>
            <hr>
            <form action="" method="post" novalidate="novalidate">
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Nama Lengkap</label>
                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid"  data-val="true" data-val-required="Please enter the name"
                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-ttl" class="control-label mb-1">Tanggal Lahir</label>
                    <input id="cc-ttl" name="cc-ttl" type="date" class="form-control cc-ttl valid" data-val="true" data-val-required="Please enter the ttl"
                        autocomplete="cc-ttl" aria-required="true" aria-invalid="false" aria-describedby="cc-ttl-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-ttl" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-email" class="control-label mb-1">email</label>
                    <input id="cc-email" name="cc-email" type="email" class="form-control cc-email valid" data-val="true" data-val-required="Please enter the email"
                        autocomplete="cc-email" aria-required="true" aria-invalid="false" aria-describedby="cc-email-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-email" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-password" class="control-label mb-1">Password</label>
                    <input id="cc-password" name="cc-password" type="password" class="form-control cc-password valid" data-val="true" data-val-required="Please enter the password"
                        autocomplete="cc-password" aria-required="true" aria-invalid="false" aria-describedby="cc-password-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-password" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group has-success">
                    <label for="cc-conpass" class="control-label mb-1">Konfirmasi Password</label>
                    <input id="cc-conpass" name="cc-conpass" type="password" class="form-control cc-conpass valid" data-val="true" data-val-required="Please enter the password"
                        autocomplete="cc-conpass" aria-required="true" aria-invalid="false" aria-describedby="cc-conpass-error">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-conpass" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label for="cc-address" class="control-label mb-1">Alamat</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                    <span class="help-block" data-valmsg-for="cc-address" data-valmsg-replace="true"></span>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                        <span id="payment-button-amount">Register</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection