@extends('layout/main')

@section('konten')
<style>
    .card {
        border-radius: 30px;
    }
</style>
<div class="dashboard container-fluid mt-3 ml-3">
    <h3>Hello, welcome to dashboard Widia!</h3>
    <div class="row mt-5">
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{url ('assets/icon_apd-layak.png') }}">
                        </div>
                        <div class="col-sm-8">
                            <h5>Total APD Layak</h5>
                            <h1>115000</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{url ('assets/icon_apd-rusak.png') }}">
                        </div>
                        <div class="col-sm-8">
                            <h5>Total APD Rusak</h5>
                            <h1>115000</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection