@extends('admin.layout')
@section('dashboard','active')
@section('content')
<div class="headerSection mt-3">
    <h2>Dashboard</h2>
    <span><span>Home</span> / Dashboard</span>
</div>
<div class="mt-3 cards d-flex flex-wrap gap-4 justify-content-between w-full  mx-3">
    <div class="shadow rounded-1">
        <div class="card border-0 info-card sales-card">
            <div class="card-body">
            <h5 class="card-title">Total <span>| Event</span></h5>

            <div class="d-flex align-items-center">
                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                    <i class="fas fa-list"></i>
                </div>
                <div class="card_footr ml-2">
                    <h6>{{$statistique['Event']}}</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="shadow rounded-1">
        <div class="card border-0 info-card sales-card">
            <div class="card-body">
            <h5 class="card-title">Total <span>| Ticket</span></h5>

            <div class="d-flex align-items-center">
                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="card_footr ml-2">
                    <h6>{{$statistique['Event']}}</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="shadow rounded-1">
        <div class="card border-0 info-card sales-card">
            <div class="card-body">
            <h5 class="card-title">Total <span>| Category</span></h5>

            <div class="d-flex align-items-center">
                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-tags"></i>
                </div>
                <div class="card_footr ml-2">
                    <h6>{{$statistique['categories']}}</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
            </div>
        </div>

        </div>
    </div>
    <div class="shadow rounded-1">
        <div class="card border-0 info-card sales-card">
            <div class="card-body">
            <h5 class="card-title">Total <span>| User</span></h5>

            <div class="d-flex align-items-center">
                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card_footr ml-2">
                    <h6>{{$statistique['users']}}</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
            </div>
        </div>

        </div>
    </div>
</div>
<div class="card-body mt-5 shadow p-2 m-3 ">
    <div class="datatable-container">
        <table class="table table-borderless datatable datatable-table">
            <thead>
                <tr>
                    <th data-sortable="true" style="width: 10.648148148148149%;">
                        #
                    </th>
                    <th data-sortable="true" style="width: 23.456790123456788%;">
                        Title
                    </th>
                    <th data-sortable="true" style="width: 11.728395061728394%;">
                        User
                    </th>
                    <th data-sortable="true" class="red" style="width: 14.814814814814813%;">
                        Price
                    </th>
                    <th data-sortable="true" class="red" style="width: 14.814814814814813%;">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($lastEvent as $event)
                <tr data-index="0">
                    <td><a href="#">#{{$event->id}}</a></td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->user->name}}</td>
                    <td>${{$event->price}}</td>
                    @if($event->isPublish == 'publish')
                    <td class="green"><span class="badge bg-success">Published</span></td>
                    @else
                    <td class="green"><span class="badge bg-danger">Not Publish</span></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection