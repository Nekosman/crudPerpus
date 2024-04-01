@extends('layout')

@section('title', 'student')

@section('content')
<table
  id="table"
  data-toggle="table"
  data-search="true"
  data-pagination="true"
  >
  <thead>
    <tr>
      <th data-field="id">ID</th>
      <th data-field="nis">NIS</th>
      <th data-field="nama">Nama</th>
      <th data-field="class_id">Kelas</th>
      <th data-formatter="buttonFormatter">Action</th>
    </tr>
  </thead>
</table>
@endsection

@push('scripts')
<script>
    $('#table').bootstrapTable({
        url: "{{ route('getAllStudent') }}",
        pagination: true,
        search: true
    })


    function buttonFormatter(value) {
        return "<button class='btn btn-warning'>Edit</button> "+
        " <button class='btn btn-danger'>Delete</button>"
    }
  </script>
@endpush
