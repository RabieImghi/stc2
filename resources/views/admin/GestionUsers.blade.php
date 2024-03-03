@extends('admin.layout')
@section('GestionUsers','active')
@section('content')
<div class="headerSection mt-3">
    <h2>Permissions</h2>
    <span><span>Home /Permissions</span> / Permissions Users</span>
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
<table class="tabel me-4" style="width: 98.3%">
    <thead class="">
        <tr>
            <th class="p-4">Name</th>
            <th class="p-4">Email</th>
            <th class="p-4">Role</th>
            <th class="p-4">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="p-4">{{$user->name}}</td>
            <td class="p-4">{{$user->email}}</td>
            <td class="p-4">{{$user->roles[0]->name}}</td>
            <td class="p-4 d-flex
            gap-2">
                <button class="btn btn-success"
                onclick="aficheDetailsupdate({{$user->id}})" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </button>
                <button
                onclick="aficheDetails({{$user->id}},'{{$user->name}}')" 
                data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="btn btn-danger" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="addModalBack"></div>
<div class="addModal p-4">
    <div class="fw-bold h5">
        New Product 
    </div>
    <p class="text-secondary h6">Add information and add new product.</p>
    <form action="/updateRoleUser" method="POST">
        @csrf
        <div class="group mt-3">
            <label class="fw-bold text-secondary"> User</label>
            <input type="hidden" name="user_idd" id="user_idd">
            <select name="role_id" class="form-control mt-1">
                @foreach($roles as $role)
                @if($role->id != 1)
                <option value="{{$role->id}}" >{{$role->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="group mt-3 text-end">
            <button class="addPermission p-2 border-0 rounded-1">Update Role</button>
        </div>

    </form>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="/deleteUser" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id">
                    Are you sure you want to delete this User? <span id="nameUesr" class=""></span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var addModal = document.querySelector('.addModal');
    var addModalBack = document.querySelector('.addModalBack');
    
    function aficheDetailsupdate(user_id){
        document.getElementById('user_idd').value = user_id;
        var addModal = document.querySelector('.addModal');
        var addModalBack = document.querySelector('.addModalBack');
        addModal.classList.add('show');
        addModalBack.classList.add('show');

        addModalBack.addEventListener('click', function() {
            addModal.classList.remove('show');
            addModalBack.classList.remove('show');
        });
    }
    function aficheDetails(user_id,name){
        document.getElementById('user_id').value = user_id;
        document.getElementById('nameUesr').innerHTML = name;
    }
</script>
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
@endsection