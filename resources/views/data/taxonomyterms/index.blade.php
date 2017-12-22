@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="taxonomyterms-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Parent_id</th>
                <th>Name</th>
                <th>lft</th>
                <th>rgt</th>
                <th>depth</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
{{-- <script>
$(function() {
    $('#taxonomyterms-table').DataTable({
        serverSide: true,
        processing: true,
        ajax: '{!! route('data.taxonomyterms') !!}',
        columns: [
            { data: 'id', name: 'id' },
            {data: 'parent_id', name: 'parent_id' },
            { data: 'name', name: 'name' },
            { data: 'lft', name: 'lft' },
            { data: 'rgt', name: 'rgt' },
            { data: 'depth', name: 'depth' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script> --}}
<script type="text/javascript">
    $(function () {
        $('#taxonomyterms-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '/taxonomyterms/data'
        });
    });
</script>

@endpush