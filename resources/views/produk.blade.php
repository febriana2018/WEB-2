@extends('base')
@section('konten')

<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('base')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>
<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <a href="{{route('tambahProduk')}}" button type="button" class="btn btn-primary">Tambah</button> </a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID Produk</th>
                    <th>ID Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID Produk</th>
                    <th>ID Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                  </tr>  
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
@endsection