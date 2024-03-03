@extends('admin.layout')
@section('permissionUser','active')
@section('content')
<div class="headerSection mt-3">
    <h2>Permissions</h2>
    <span><span>Home /Permissions</span> / Permissions Users</span>
</div>
<div class="addNewPermissions text-end me-4">
    <button class="addPermission p-2 border-0 rounded-1">Add New Permission</button>
</div>
<div class="addModalBack"></div>
<div class="addModal p-4">
    <div class="fw-bold h5">
        New Product 
    </div>
    <p class="text-secondary h6">Add information and add new product.</p>
    <form action="/AddPermissionUser" method="POST">
        @csrf
        <div class="group mt-3">
            <label class="fw-bold text-secondary"> User</label>
            <select name="user_id" class="form-control mt-1">
                @foreach($users as $user)
                <option value="{{$user->id}}" selected>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="group mt-3">
            <label class="fw-bold text-secondary"> Permissions</label>
            <select class="form-select mt-1" name="permisssion_id[]" size="20" id="multiple-select-field" data-placeholder="Choose anything" multiple>
                @foreach($permissions as $permission)
                <option value="{{$permission->id}}">{{$permission->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="group mt-3 text-end">
            <button class="addPermission p-2 border-0 rounded-1">Add New Permission</button>
        </div>

    </form>
</div>
<script>
    var addPermission = document.querySelector('.addPermission');
    var addModal = document.querySelector('.addModal');
    var addModalBack = document.querySelector('.addModalBack');

    addPermission.addEventListener('click', function() {
        addModal.classList.add('show');
        addModalBack.classList.add('show');
    });

    addModalBack.addEventListener('click', function() {
        addModal.classList.remove('show');
        addModalBack.classList.remove('show');
    });
    
</script>
<table class="tabel me-4">
    <thead class="">
        <tr>
            <th class="p-4">Name</th>
            <th class="p-4">Email</th>
            <th class="p-4">Role</th>
            <th class="p-4">Permissions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="p-4">{{$user->name}}</td>
            <td class="p-4">{{$user->email}}</td>
            <td class="p-4">{{$user->roles[0]->name }}</td>
            <td class="p-4 d-flex flex-wrap gap-2">
                @foreach($user->permissions as $permission)
                <span onclick="aficheDetail({{$user->id}},{{$permission->id}},'{{$permission->name}}')" data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-point fw-normal mb-1 prmissions">{{$permission->name}}</span>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>
    
    .show {
        display: block !important;
    }
    .addModal, .addModalBack {
        display: none;
    }

     table {
        border-collapse: separate;
        border-spacing: 0 20px;
    }
    .addPermission{
        background-color: #fb4c6e;
        color: white;
    }

    table tr {
        box-shadow: 2px 3px 10px rgba(211, 211, 211, 0.635);
        border-radius: 3px;
        padding: 20px;
    }
    table tr:hover {
        cursor: pointer;
        background-color: #fbadbd1d;
    }
    table td, table th {
        padding: 10px 0;
    }
    .prmissions{
        background-color: #fb4c6e;
        color: white;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 5px;
    }
    .prmissions:hover{
        background-color: white;
        color: #fb4c6e;
        transform: translateY(-2px);
        transition: all 0.4s ease;
    }
    .addModalBack{
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100vh;
        background: rgba(67, 67, 67, 0.164);
        cursor: pointer;
    }
    .addModal{
        position: absolute;
        top: 80px;
        right: 0;
        width: 360px;
        height: calc(100vh - 80px);
        background: white;
        box-shadow: 3px 0px 20px lightgray;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="/deletePermissionUser" method="POST">
                @csrf
                <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                </div>
                <div class="modal-body">
                <input type="hidden" name="user_id" id="user_id">
                <input type="hidden" name="permission_id" id="permission_id">
                Are you sure you want to delete this permission? <span id="permission" class=""></span>
                </div>
                <div class="modal-footer">
                <button class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
            
          
    </div>
</div>
<script>
    function aficheDetail(user_id,permission_id,name){
        document.getElementById('user_id').value = user_id;
        document.getElementById('permission_id').value = permission_id;
        document.getElementById('permission').innerHTML = name;
    }
</script>
@endsection