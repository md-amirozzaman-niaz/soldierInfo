<template>
    <div>
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
                            <label for="">Previous Unit/Org</label>
                            <input type="text" class="form-control" placeholder="previous unit">
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
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" >Served Unit/Org</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check  custom-checkbox">
                                <input class="form-check-input custom-control-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label custom-control-label" for="inlineCheckbox1">9 lancer</label>
                            </div>
                            <div class="form-check  custom-checkbox">
                                <input class="form-check-input custom-control-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label custom-control-label" for="inlineCheckbox2">ACC&S</label>
                            </div>
                        </div>
                    </div>
                    <hr>
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
                    <div class="form-row m-0 mb-2">
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
                    <div class="form-row m-0 mb-2">
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
                    <div class="form-row m-0 mb-2">
                        <div class="col v-align">
                            <label>IPFT</label>
                        </div>
                        <div class="col form-row m-0">
                            <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
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
                            <select class="custom-select mr-1  col" id="inlineFormCustomSelect">
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
                            <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
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
                    <hr>
                    <div class="row m-0">
                        <div class="col-md-3 v-align"><label for="">Punishment</label></div>
                        <div class="col-md-9 p-1"><input type="text" class="form-control"></div>
                    </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>