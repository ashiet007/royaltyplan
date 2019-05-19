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
                                        <h2>Unused Pin</h2>
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
                            <h2>Unused Pin</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Pin</th>
                                    <th>Pin Amount</th>
                                    <th>Pin Details</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($userUnusedPins as $userUnusedPin)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$userUnusedPin->pin}}</td>
                                        <td>{{$userUnusedPin->PinHelpAmount->pin_amount}}</td>
                                        <td>
                                            @if($userUnusedPin->creation_detail == 'created')
                                               Created At: {{$userUnusedPin->created_at->format('d, M Y h:i:s A')}}
                                            @else
                                                <button class="btn btn-success" onclick="getDetails('{{$userUnusedPin->pin}}');">CLick Here</button>
                                            @endif
                                        </td>
                                        <td><button class="btn btn-success">Activate</button></td>
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pin Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 font-weight-bold">
                           <strong>Creator Name:</strong>
                        </div>
                        <div class="col-md-8" id="creatorName">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bold">
                            <strong>Creator Username:</strong>
                        </div>
                        <div class="col-md-8" id="creatorUsername">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 font-weight-bold">
                             <strong>Created date:</strong>
                        </div>
                        <div class="col-md-8" id="date">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <!-- Data Table JS
		============================================ -->
    <script src="{{asset('js/dashboard/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dashboard/data-table/data-table-act.js')}}"></script>
    <script>
        function getDetails(pin)
        {
            $('.loader').show();
            var pin = pin;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('pin.getPinDetails') }}",
                method: 'post',
                data: {
                    pin: pin
                },
                success: function(result){
                    $('.loader').css('display','none');
                    $('#creatorName').text(result.creatorName);
                    $('#creatorUsername').text(result.creatorUsername);
                    $('#date').text(result.createdDate);
                    $('#myModal').modal('show');
                },
                error:function (xhr) {
                    $('.loader').css('display','none');
                    alert('Invalid Sponsor');
                }
            });

        }
    </script>
@endsection

