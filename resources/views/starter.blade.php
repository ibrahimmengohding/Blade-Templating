@extends('app')

@section('title', 'Starter Page')

@section('content')
<!--begin::App Content Header-->
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3 class="mb-0">Starter Page</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--end::App Content Header-->

<!--begin::App Content-->
<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Card 1 Starter</h5>
            <p class="card-text">
              Ini adalah isi khusus untuk halaman **Starter Page**. Tampilan menunya tetap sama persis karena membagikan master template yang sama.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Card 2 Starter</h5>
            <p class="card-text">
              Anda bebas mendesain isi kotak ini sesuka hati tanpa perlu memikirkan kode navbar atau sidebar lagi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end::App Content-->
@endsection
