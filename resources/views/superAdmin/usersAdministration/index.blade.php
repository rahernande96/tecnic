@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Usuarios</h5>
    </div>
    <div class="card-body">
        <table class="table" id="users">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>role</th>
                    <th></th>
                    
                </tr>
            </thead>
        </table>
    </div>
</div>
    
@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        $('#users').DataTable({
            'serverSide': true,
            'ajax': "{{ route('admin.users.index.ajax') }}",
            'columns': [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'role'},
                {data: 'btn'}
            ]
        });
    });
</script>

@endsection