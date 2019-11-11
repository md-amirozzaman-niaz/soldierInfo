<template>
  <div>
    <div class="form-row mb-2">
      <div class="col-md-8">
        <label for class>Full Name</label>
        <input type="text" class="form-control" v-model="persoanl.fullName" placeholder="Full name" />
      </div>
      <div class="col-md-4">
        <label for class>Profile Image</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="imgInp" required />
          <label class="custom-file-label" for="imgInp">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
      </div>
    </div>
    <div class="form-row mb-2">
      <div class="col">
        <label for class>Snk No.</label>
        <input
          type="text"
          class="form-control"
          v-model="persoanl.snkNumber"
          placeholder="120003334"
        />
      </div>
      <div class="col">
        <label for class>Rank</label>
        <select class="custom-select mr-sm-2" v-model="persoanl.rank" id="inlineFormCustomSelect">
          <option selected>Snk</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="col">
        <label for>Trade</label>
        <select class="custom-select mr-sm-2" v-model="persoanl.trade" id="inlineFormCustomSelect">
          <option selected>Driver</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </div>
      <div class="col">
        <label for>medical</label>
        <select
          class="custom-select mr-sm-2"
          v-model="persoanl.medical"
          id="inlineFormCustomSelect"
        >
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
            <span
              class="input-group-text shadow-inset-light"
              id="validationTooltipUsernamePrepend"
            >@</span>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="persoanl.email"
            id="validationTooltipUsername"
            placeholder="email"
            aria-describedby="validationTooltipUsernamePrepend"
            required
          />
          <div class="invalid-tooltip">Please choose a unique and valid email.</div>
        </div>
      </div>
      <div class="col">
        <label>Mobile Number</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span
              class="input-group-text shadow-inset-light"
              id="validationTooltipUsernamePrepend"
            >#</span>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="persoanl.mobileNumber"
            id="validationTooltipUsername"
            placeholder="mobile number"
            aria-describedby="validationTooltipUsernamePrepend"
            required
          />
          <div class="invalid-tooltip">Please choose a unique and valid mobile number.</div>
        </div>
      </div>
      <div class="col">
        <label>NID Number</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span
              class="input-group-text shadow-inset-light"
              id="validationTooltipUsernamePrepend"
            >#</span>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="persoanl.NIDNumber"
            id="validationTooltipUsername"
            placeholder="NID number"
            aria-describedby="validationTooltipUsernamePrepend"
            required
          />
          <div class="invalid-tooltip">Please choose a unique and valid NID number.</div>
        </div>
      </div>
      <div class="col">
        <label>IME Number</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span
              class="input-group-text shadow-inset-light"
              id="validationTooltipUsernamePrepend"
            >#</span>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="persoanl.IMENumber"
            id="validationTooltipUsername"
            placeholder="IME number of your device"
            aria-describedby="validationTooltipUsernamePrepend"
            required
          />
          <div class="invalid-tooltip">Please choose a unique and valid IME number.</div>
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col">
        <label for>Gender</label>
        <select class="custom-select mr-sm-2" v-model="persoanl.gender" id="inlineFormCustomSelect">
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="other">other</option>
        </select>
      </div>
      <div class="col">
        <label for>Height</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span
              class="input-group-text cm shadow-inset-light"
              id="validationTooltipUsernamePrepend"
            >cm</span>
          </div>
          <input
            type="text"
            class="form-control"
            v-model="persoanl.height"
            id="validationTooltipUsername"
            placeholder="height in centimeter"
            aria-describedby="validationTooltipUsernamePrepend"
            required
          />
        </div>
      </div>
      <div class="col">
        <label for>Birth Date</label>
        <input type="date" class="form-control" v-model="persoanl.birthDate" placeholder />
      </div>
      <div class="col">
        <label for>Blood Group</label>
        <select
          class="custom-select mr-sm-2"
          v-model="persoanl.bloodGroup"
          id="inlineFormCustomSelect"
        >
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
</template>

<script>
export default {
  props: {
    persoanl: { required: true }
  }
};
</script>