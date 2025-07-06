@extends('master')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Form Program Studi</h5>
  
                <!-- Horizontal Form -->
                <form method="POST" action="{{ route('prodi.store') }}">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Program Studi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- End Horizontal Form -->
  
              </div>
            </div>
  
          </div>
  
          <div class="col-lg-6">
  
          </div>
        </div>
      </section>
  
  </main><!-- End #main -->  
@endsection