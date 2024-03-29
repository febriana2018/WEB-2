@extends('base')
@section('konten')

<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('base')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Kategori</li>
        </ol>
<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('kategori.create')}}" button type="button" class="btn btn-primary">Tambah</button> </a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Kategori</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID Kategori</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                @foreach($kategori as $value)
                  <tr>
                    <td width="1">{{$value->id_kategori}}</td>
                    <td>{{$value->nama}}</td>
                    <td>
                      <a href="{{route('kategori.edit', $value->id_kategori)}}" class="btn btn-success">Edit</a>
                      <form action="{{route('kategori.destroy', $value->id_kategori)}}" method="POST"></form>
                      @csrf
                      @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </td>
                  </tr>
                 @endforeach
    
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
@endsection