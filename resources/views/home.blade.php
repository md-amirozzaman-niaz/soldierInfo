@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <ul class="container nav nav-tabs mt-3">
            <li class="p-2"><a data-toggle="tab" href="#personal" class="active pt-2">Personal</a></li>
            <li class="p-2"><a data-toggle="tab" href="#history" class="pt-2">Service History</a></li>
            <li class="p-2"><a data-toggle="tab" href="#academic" class="pt-2">Education & skill</a></li>
            <li class="p-2"><a data-toggle="tab" href="#mission-achivement" class="pt-2">Mission & Achievement</a></li>
            <li class="p-2"><a data-toggle="tab" href="#family" class="pt-2">Family overview</a></li>
            <li class="p-2"><a data-toggle="tab" href="#address" class="pt-2">Address</a></li>
        </ul>
        <div class="tab-content container mt-5" style="min-height:600px;">
            <form>
                <div id="personal" class="tab-pane fade show active">
                    <div class="form-row mb-2">
                            <div class="col-md-8">
                                    <label for="">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full name">
                            </div>
                            <div class="col-md-4">
                                    <label for="">Profile Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Snk No.</label>
                            <input type="text" class="form-control" placeholder="120003334">
                        </div>
                        <div class="col">
                            <label for="">Rank</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Snk</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                        </div>
                        <div class="col">
                                <label for="">Trade</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Driver</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                            </div>
                            <div class="col">
                                <label for=""> medical</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>med</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>

                    <div class="form-row mb-2">
                        <div class="col">
                            <label>email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="email" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid email.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>Mobile Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                </div>
                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="mobile number" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid mobile number.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>NID Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                </div>
                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="NID number" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid NID number.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label>IME Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">#</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="IME number of your device" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                    Please choose a unique and valid IME number.
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="">Gender</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Height</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">cm</span>
                                </div>
                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="height in centimeter" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid mobile number.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">Birth Date</label>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                        <div class="col">
                            <label for="">Blood Group</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>

                    </div>
                            
                </div>
                <div id="history" class="tab-pane fade">
                        <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Service Joining Date</label>
                            <input type="date" class="form-control" placeholder="120003334">
                        </div>
                        <div class="col">
                            <label for="">Present Unit Joining date</label>
                            <input type="date" class="form-control" placeholder="120003334">
                        </div>
                        <div class="col">
                            <label for="">Served Unit/Org</label>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">9 lancer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">ACC&S</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for=""> Present Unit</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Horse 26</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        </div>

                    <div class="form-row mb-2">
                        <div class="col v-align">
                            #
                        </div>
                        <div class="col v-align">
                            <label>2019</label>
                        </div>
                        <div class="col v-align">
                            <label>2018</label>
                        </div>
                        <div class="col v-align">
                            <label>2017</label>
                        </div>
                    </div>
                    <div class="form-row m-0">
                        <div class="col v-align">
                            <label>APR </label>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row m-0">
                        <div class="col v-align">
                            <label>RET </label>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="other">Pending</option>
                                <option value="male">Passed</option>
                                <option value="female">failed</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="male">Passed</option>
                                <option value="female">failed</option>
                                <option value="other">Pending</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="female">failed</option>
                                <option value="male">Passed</option>
                                <option value="other">Pending</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row m-0">
                        <div class="col v-align">
                            <label>IPFT</label>
                        </div>
                        <div class="col form-row m-0">
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>
                        <div class="col form-row m-0">
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>
                        <div class="col form-row m-0">
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                            <select class="custom-select col" id="inlineFormCustomSelect">
                                <option value="male">High</option>
                                <option value="female">Avg</option>
                                <option value="other">low</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div id="academic" class="tab-pane fade">
                    
                    </div>
                <div id="mission-achivement" class="tab-pane fade">
                    <div class="form-row mb-2">
                        <div class="col">
                            Mission Name
                        </div>
                        <div class="col">
                            <label>Mission Start date</label>
                        </div>
                        <div class="col">
                            <label>Mission End date</label>
                        </div>
                        <div class="col">
                            <label>Duration</label>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="name of mission">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" >
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" >
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="how many month">
                        </div>
                    </div>
                </div>
                <div id="family" class="tab-pane fade">
                
                </div>
                <div id="address" class="tab-pane fade">
                
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
