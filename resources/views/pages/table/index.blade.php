@extends('layouts.app')

@section('content')
 
@endsection
@push('customScript')
<!-- cdn data tables -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- custom scrip -->
<script>    
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endpush

@push('customStyle') 
<!-- cdn style datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
@endpush
