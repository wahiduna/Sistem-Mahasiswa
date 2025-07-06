@extends('master')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mahasiswa</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="30%">
                      <b>Name</b>
                    </th>
                    <th width="20%">Whatsapp</th>
                    <th width="30%">Program Studi</th>
                    <th width="20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $row)
                  <tr>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->whatsapp }}</td>
                    <td>{{ $row->prodi->name }}</td>
                    <td>
                      <form action="{{ route('mahasiswa.destroy', $row->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('mahasiswa.show', $row->id) }}" class="btn btn-success">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $row->id) }}" class="btn btn-info">Update</a>
                        <button onclick="return confirm('Are you sure ?')"  class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection