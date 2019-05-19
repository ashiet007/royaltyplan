@extends('layouts.backend')
@section('styles')
    <!-- Data Table CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/jquery.dataTables.min.css')}}">
@endsection
@section('content')
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Total Team</h2>
                                        <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Total Team</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Level</th>
                                    <th>Sponsor ID</th>
                                    <th>Sponsor Name</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>DOJ</th>
                                    <th>Mobile Number</th>
                                    <th>Alternate Mobile number</th>
                                    <th>Email</th>
                                    <th>Total Direct</th>
                                    <th>Total Team</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach($teamDetails as $member)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$member->level}}</td>
                                        <td>{{$member->sponsor_id}}</td>
                                        <td>
                                            @php
                                            $sponsor = \App\User::where('user_name',$member->sponsor_id)->first();
                                            @endphp
                                            {{$sponsor->name}}
                                        </td>
                                        <td>{{$member->user_name}}</td>
                                        <td>{{$member->name}}</td>
                                        <td>{{$member->created_at->format('d, M Y h:i:s A')}}</td>
                                        <td>{{$member->userDetails->mob_no}}</td>
                                        <td>{{$member->userDetails->alternate_mob_no}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$count = getTotalDirectTeam($member->user_name)}}</td>
                                        <td>{{count(getTotalTeam($member->user_name))}}</td>
                                        <td>{{$member->status}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
@endsection
@section('scripts')
    <!-- Data Table JS
		============================================ -->
    <script src="{{asset('js/dashboard/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dashboard/data-table/data-table-act.js')}}"></script>
@endsection
