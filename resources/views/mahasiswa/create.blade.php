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
                <h5 class="card-title">Form Mahasiswa</h5>
                <!-- Horizontal Form -->
                <form method="POST" action="{{ route('mahasiswa.store') }}">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputText">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Whatsapp</label>
                    <div class="col-sm-10">
                      <input type="text" name="whatsapp" class="form-control" id="inputEmail">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputProgramStudi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="prodi_id" aria-label="Default select example">
                            @foreach ($prodi as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
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