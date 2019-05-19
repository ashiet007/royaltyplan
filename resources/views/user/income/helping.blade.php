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
                                        <h2>Direct Team</h2>
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
                            <h2>Direct Team</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Sender Username</th>
                                    <th>Sender Name</th>
                                    <th>Sender Mobile Number</th>
                                    <th>Amount</th>
                                    <th>Accepted Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($giveHelps as $giveHelp)
                                    @foreach($giveHelp->getHelps as $getHelp)
                                        @if($getHelp->pivot->status == 'accepted')
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$getHelp->user->user_name}}</td>
                                                <td>{{$getHelp->user->name}}</td>
                                                <td>{{$getHelp->user->userdetails->mob_no}}</td>
                                                <td>{{$getHelp->pivot->assigned_amount}}</td>
                                                <td>{{$getHelp->pivot->updated_at->format('d, M y h:i:s A')}}</td>
                                            </tr>
                                        @php
                                        $i = $i+1;
                                        @endphp
                                        @endif
                                    @endforeach
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

