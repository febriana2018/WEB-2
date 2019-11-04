{!!Form::open(['role' => 'form', 'route' => ['kategori.store'], 'method' => 'post'])!!}

{!!Form::label('name', 'Nama')!!}

{!!Form::text('name', null,['class' => 'form-control'])!!}

<button type="submit" class="btn btn-primary"> Simpan </button>

{!! Form::close()!!}

