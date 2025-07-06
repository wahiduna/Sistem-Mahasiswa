@extends('master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('prodi.index') }}">Program Studi</a></li>
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </nav>
    </div>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Prodi</h5>
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Name</div>
                <div class="col-lg-9 col-md-8">{{ $prodi->name }}</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
</main><!-- End #main -->
@endsection