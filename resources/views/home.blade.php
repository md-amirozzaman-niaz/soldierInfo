@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="root">
        <ul class="container nav nav-tabs mt-3">
            <li><a data-toggle="tab" href="#personal" class="active p-2">Personal</a></li>
            <li><a data-toggle="tab" href="#history" class="p-2">Service History</a></li>
            <li><a data-toggle="tab" href="#academic" class="p-2">Education & skill</a></li>
            <li><a data-toggle="tab" href="#mission-achivement" class="p-2">Mission & Achievement</a></li>
            <li><a data-toggle="tab" href="#family" class="p-2">Family overview</a></li>
            <li><a data-toggle="tab" href="#address" class="p-2">Address</a></li>
            <li><a data-toggle="tab" href="#view" class="p-2">view & create</a></li>
        </ul>
        <div class="tab-content container mt-5" style="min-height:600px;">
            <form>
                <div id="personal" class="tab-pane fade show active">
                        <personal-info :persoanl="formValue.personal"></personal-info>        
                </div>
                <div id="history" class="tab-pane fade">
                   <service-history></service-history>
                </div>
                <div id="academic" class="tab-pane fade">
                    <academic @up-date-checked-skill="upDateCheckedSkill" :skills="skillOption" :max="hasMax" :form="formValue.academic"></academic>

                </div>
                <div id="mission-achivement" class="tab-pane fade">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Achievement</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="col">Mission</div>
                    <div class="form-row mb-2">
                        <div class="col v-align">
                            #
                        </div>
                        <div class="col v-align">
                            Name
                        </div>
                        <div class="col v-align">
                            <label>Start date</label>
                        </div>
                        <div class="col v-align">
                            <label>End date</label>
                        </div>
                        <div class="col v-align">
                            <label>Duration</label>
                        </div>
                        <div class="col v-align">
                            <label>Comment</label>
                        </div>
                    </div>
                   
                    <div class="mission popups-fade-in-up mb-2"  v-for="i in missionCount" >
                      
                        <div v-if="i != missionCount" class="form-row">
                            <div class="col v-align">
                                    @{{i}}
                            </div>
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
                            <div class="col">
                                <input type="text" class="form-control" placeholder="comment">
                            </div>
                        </div>
                        <div v-else class="form-row">
                            <div class="col v-align">=>
                            </div>
                            <div class="col v-align">--
                            </div>
                            <div class="col v-align">--
                            </div>
                            <div class="col v-align">--
                            </div>
                            <div class="col v-align">--
                            </div>
                            <div class="col form-row m-0 pl-4">
                                
                                    <input type="button" @click="missionCount++" class="form-control btn-primary btn-sm col mr-1" value="add row">
                                    
                                    <input type="button" @click="missionCount--" class="form-control btn-danger btn-sm col" value="remove row">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    {{-- <div class="form-row col col-md-3">
                        <input type="button" @click="missionCount++" class="form-control btn-primary btn-sm col mr-2" value="add row">
                        
                        <input type="button" @click="missionCount--" class="form-control btn-danger btn-sm col" value="remove row">
                    </div> --}}
                    </div>
                </div>
                <div id="family" class="tab-pane fade">
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Father Name</label>
                            <input type="text" class="form-control" placeholder="Father name">
                        </div>
                        <div class="col">
                            <label for="">Mother Name</label>
                            <input type="text" class="form-control" placeholder="Mother name">
                        </div>
                        <div class="col">
                            <label for="">Gaurdian Name</label>
                            <input type="text" class="form-control" placeholder="Gaurdian name">
                        </div>
                        <div class="col">
                            <label for="">Relationship with Gaurdian</label>
                            <input type="text" class="form-control" placeholder="Relationship name">
                        </div>
                    </div>
    
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Phone Number (father)</label>
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
                                <label for="">Phone Number (mother)</label>
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
                            <label for="">Phone Number (gaurdian)</label>
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
                            <label for=""> martial status</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" @change="upDateMarried()">
                                <option value="0">unmarried</option>
                                <option value="1">married</option>
                            </select>
                        </div>
                    </div>
                    {{-- if married is true below section will visible --}}
                    <div class="form-row martial-details" :class="{'popups-fade-in-up': isMarried}">
                        <div class="col">
                            <label for="" class="">wife name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">wife occupation</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">children count</label>
                            <input type="text" class="form-control" v-model="childCount">
                        </div>
                        <div class="col children-details" :class="{'popups-fade-in-up': hasChild}">
                            <div class="children popups-fade-in-up"  v-for="i in updatedChildCount" >
                                <label :for="'children-' + i">children @{{ i }}</label>
                                <input type="text" placeholder="name" :id="'children-' + i" class="form-control mb-1">
                                <label :for="'birth-date-of-children-' + i">Birth Date of children @{{ i }}</label>
                                <input type="date" :id="'birth-date-of-children-' + i" class="form-control mb-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="address" class="tab-pane fade">
                    <div class="form-row">
                        <div class="col v-align">Permanent Address</div>
                    </div>
                    <hr>
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Division name</label>
                            <select class="custom-select" name="" id="">
                                <option value="">Dhaka</option>
                                <option value="">Chittagong</option>
                                <option value="Mymansing">Mymansing</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="district">District name</label>
                            <select class="custom-select mr-sm-2" name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Upazilla Name</label>
                            <select class="custom-select mr-sm-2" name="" id=""></select>
                        </div>
                        <div class="col">
                            <label for="">Post office</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="">Detail address</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col v-align">Present Address</div>
                    </div>
                    <hr>
                    <div class="form-row mb-2">
                        <div class="col">
                            <label for="">Division name</label>
                            <select class="custom-select" name="" id="">
                                <option value="">Dhaka</option>
                                <option value="">Chittagong</option>
                                <option value="Mymansing">Mymansing</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="district">District name</label>
                            <select class="custom-select mr-sm-2" name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Upazilla Name</label>
                            <select class="custom-select mr-sm-2" name="" id=""></select>
                        </div>
                        <div class="col">
                            <label for="">Post office</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="">Detail address</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div id="view" class="tab-pane fade">
                    {{-- <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <label for="">Full Name:</label><b>@{{ formValue.personal.fullName }}</b>
                        <label for="">Birth date:</label><b>@{{ formValue.personal.birthDate }}</b>
                        <label for="">Snk Number:</label><b>@{{ formValue.personal.snkNumber }}</b>
                    </div>
                    </div> --}}
                    <div class="col v-align">
                        Personal Information
                    </div>
                    <div class="row">
                    <div class="col-md-2 img-thumbnail" style="height:160px;"><img src id="proimg" class=""></div>
                    <div class="col-md-10 "><div v-for="(value, name) in formValue.personal" class="row bg-white p-1">
                        <div class="col-md-2" :class="{'bg-light': value}">  @{{ _.upperCase(name) }} :</div>
                        <div class="col-md-10 bg-light"> @{{ value }} </div> 
                    </div>
                    </div>
                    </div>
                    <hr>
                    <div class="col v-align">
                        Academic
                    </div>
                    <div v-for="(value, name) in formValue.academic" class="row bg-white p-1">
                            <div class="col-md-2" :class="{'bg-light':value}">  @{{ _.capitalize(_.upperCase(name)) }} :</div>
                            <div class="col-md-10 bg-light"> @{{ value }} </div> 
                      </div>
                    <div class="row">
                        <div class="col-md-2"><label for="">Skills</label></div> 
                        <div class="col-md-10">
                            <ul class="selected-item-list">
                                <li v-for="item in checkedList" :class="{'show': item.checked}" :key="item.description">@{{item.description}}</li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
