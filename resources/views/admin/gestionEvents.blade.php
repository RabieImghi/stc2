@extends('admin.layout')
@section('GestionEvents','active')
@section('content')
<div class="headerSection mt-3">
    <h2>Permissions</h2>
    <span><span>Home /Permissions</span> / Permissions Users</span>
</div>

<table class="tabel me-4" style="width: 98.3%">
    <thead class="">
        <tr>
            <th class="p-4">Title</th>
            <th class="p-4">User</th>
            <th class="p-4">Category</th>
            <th class="p-4">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr>
            <td class="p-4">{{$event->title}}</td>
            <td class="p-4">{{$event->user->name}}</td>
            <td class="p-4">{{$event->category->name}}</td>
            <td class="p-4 d-flex
            gap-2">
                @php
                $accept = $event->id."-accept";
                $refuse = $event->id."-refuse";
                @endphp
                <a class="btn btn-danger" href="/RefuseAccepEvent/{{$refuse}}" > Refuse </a>
                <a class="btn btn-success" href="/RefuseAccepEvent/{{$accept}}"> Accept </a>
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

@endsection