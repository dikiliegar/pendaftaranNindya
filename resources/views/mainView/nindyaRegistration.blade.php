@extends('layout.master')

@section('content')

<div class="page-container">
    <!-- Page content-->
    <div class="page-content">
        <!-- Main content-->
        <div class="content-wrapper">
            <!-- form-->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- Basic layout-->
                    <form method="POST" action="{{url('/nindyaRegistration')}}">
                        {{ csrf_field() }}
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h4 class="panel-title">Pendaftaran Nindya</h4>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Campus Location:</label>
                                    <br/>
                                    <select class="form-control" name="campusLocation" id="campusLocation" required>
                                        <optgroup label="Location">
                                            <option selected disabled>Please select Campus Location First...</option>
                                            @foreach ($locations as $location)
                                                <option value = "{{$location->locationID}}">{{$location->locationName}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Generation:</label>
                                    <br/>
                                    <select class="form-control" id="generation" name="generation" required>
                                        <optgroup label="Generation" id="optgeneration">
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>NIM:</label>
                                    <input class="form-control" type="text" name="nim" placeholder="NIM" required
                                    />
                                </div>
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input class="form-control" type="text" name="fullName" placeholder="Your Name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label class="display-block">Gender:</label>
                                    <label class="radio-inline">
                                        <input class="styled" type="radio" name="gender" value="M" checked /> 
                                       &nbsp;&nbsp;&nbsp;&nbsp;Male
                                    </label>
                                    <label class="radio-inline">
                                        <input class="styled" type="radio" name="gender" value="F" />
                                        &nbsp;&nbsp;&nbsp;&nbsp;Female
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Major:</label>
                                    <br/>
                                    <select class="select select-search" name="major" required>
                                        <optgroup label="Major">
                                            @foreach ($majors as $major)
                                                <option value = "{{$major->majorID}}">{{$major->majorName}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Birth Location:</label>
                                    <br/>
                                    <select class="select select-search" name="birthLocation" required>
                                        <optgroup label="Birth Location">
                                            @foreach ($cities as $city)
                                                <option value = "{{$city->cityID}}">{{$city->cityName}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Birth Date:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="icon-calendar22"></i>
                                        </span>
                                        <input class="form-control daterange-single" name="birthDate" type="text" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number"
                                        required/>
                                </div>
                                <div class="form-group">
                                    <label>LineID:</label>
                                    <input class="form-control" type="text" name="lineID" placeholder="LineID"
                                        required/>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email"
                                        required/>
                                </div>
                                <div class="form-group">
                                    <label>Last GPA:</label>
                                    <input class="form-control" type="text" name="lastGPA" placeholder="Last GPA"
                                        required/>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <textarea class="form-control" name="address" rows="5" cols="5" placeholder="Address"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Oraganizational Experience:</label>
                                    <textarea class="form-control" name="organizationalExperience" rows="5"
                                        cols="5" placeholder="Oraganizational Experience" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Achievment:</label>
                                    <textarea class="form-control" name="achievment" rows="5" cols="5"
                                        placeholder="Achievment" required></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" >Register
                                        <i class="icon-arrow-right14 position-right"></i>
                                        <button id="sweet_success" style="display:none;"></button>
                                        <button id="sweet_info" style="display:none;"></button>
                                        <button id="sweet_warning" style="display:none;"></button>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /basic layout-->
                </div>
                <div class="col-md-3"></div>
            </div>
            <!-- form-->
        </div>
    </div>
</div>
{{-- <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script> --}}

<script type="text/javascript" src="{{asset('js/override-jquery.js')}}"defer></script>

@endsection()

