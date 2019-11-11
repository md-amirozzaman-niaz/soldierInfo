<template>
  <div>
    <div class="col">Civil</div>
    <div class="form-row mb-2">
      <div class="col v-align">#</div>
      <div class="col v-align">
        <label>JSC</label>
      </div>
      <div class="col v-align">
        <label>SSC</label>
      </div>
      <div class="col v-align">
        <label>HSC</label>
      </div>
      <div class="col v-align">
        <label>OTHER</label>
      </div>
    </div>
    <div class="form-row m-0">
      <div class="col v-align">
        <label>Result</label>
      </div>
      <div class="col">
        <select class="custom-select mr-sm-2" v-model="form.JSC" id="inlineFormCustomSelect">
          <option value="Pending">Pending</option>
          <option value="Passed">Passed</option>
          <option value="failed">failed</option>
        </select>
      </div>
      <div class="col">
        <select class="custom-select mr-sm-2" v-model="form.SSC" id="inlineFormCustomSelect">
          <option value="other">Pending</option>
          <option value="Passed">Passed</option>
          <option value="failed">failed</option>
        </select>
      </div>
      <div class="col">
        <select class="custom-select mr-sm-2" v-model="form.HSC" id="inlineFormCustomSelect">
          <option value="Passed">Passed</option>
          <option value="failed">failed</option>
          <option value="other">Pending</option>
        </select>
      </div>
      <div class="col">
        <select class="custom-select mr-sm-2" v-model="form.other" id="inlineFormCustomSelect">
          <option value="failed">failed</option>
          <option value="Passed">Passed</option>
          <option value="other">Pending</option>
        </select>
      </div>
    </div>
    <hr />
    <div class="col">Military</div>
    <div class="form-row m-0">
      <div class="col v-align">#</div>
      <div class="col v-align">
        <label>BTT</label>
      </div>
      <div class="col v-align">
        <label>ARMS</label>
      </div>
      <div class="col v-align">
        <label>Comando</label>
      </div>
      <div class="col v-align">
        <label>BMR</label>
      </div>
    </div>
    <div class="form-row m-0">
      <div class="col v-align">
        <label>Result</label>
      </div>
      <div class="col form-row m-0">
        <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
        <select class="custom-select col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
      </div>
      <div class="col form-row m-0">
        <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
        <select class="custom-select col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
      </div>
      <div class="col form-row m-0">
        <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
        <select class="custom-select col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
      </div>
      <div class="col form-row m-0">
        <select class="custom-select mr-1 col" id="inlineFormCustomSelect">
          <option value="Passed">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
        <select class="custom-select col" id="inlineFormCustomSelect">
          <option value="High">High</option>
          <option value="failed">Avg</option>
          <option value="other">low</option>
        </select>
      </div>
    </div>
    <hr />
    <div class="col">
      <label for>Special skill</label>
      <ul class="selected-item-list">
        <li v-for="item in checkedList" :class="{'show': item.checked}" :key="item.description">
          {{item.description}}
          <span
            :title="'remove ' + item.description"
            @click="upDateCheckedSkill(item.description)"
          >X</span>
        </li>
      </ul>
      <div class="alert alert-primary popups-fade-in-up fade show" v-if="max" role="alert">
        you have reached max skill.To add else item,remove from added item
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <div class="form-row col">
      <div class="col">
        <label for>Game</label>
        <div
          class="form-check custom-checkbox"
          v-for="game in skillOption.game"
          :key="game.description"
        >
          <input
            class="form-check-input custom-control-input"
            type="checkbox"
            :id="game.description"
            @click="upDateCheckedSkill(game.description)"
            :disabled="max"
            :value="game.description"
            :checked="game.checked"
          />
          <label
            class="form-check-label custom-control-label"
            :for="game.description"
          >{{game.description}}</label>
        </div>
      </div>
      <div class="col">
        <label for>Entertainment</label>
        <div
          class="form-check custom-checkbox"
          v-for="entertainment in skillOption.entertainment"
          :key="entertainment.description"
        >
          <input
            class="form-check-input custom-control-input"
            type="checkbox"
            :id="entertainment.description"
            @click="upDateCheckedSkill(entertainment.description)"
            :disabled="max"
            :value="entertainment.description"
            :checked="entertainment.checked"
          />
          <label
            class="form-check-label custom-control-label"
            :for="entertainment.description"
          >{{entertainment.description}}</label>
        </div>
      </div>
      <div class="col">
        <label for>Other</label>
        <div
          class="form-check custom-checkbox"
          v-for="other in skillOption.other"
          :key="other.description"
        >
          <input
            class="form-check-input custom-control-input"
            type="checkbox"
            :id="other.description"
            @click="upDateCheckedSkill(other.description)"
            :disabled="max"
            :checked="other.checked"
          />
          <label
            class="form-check-label custom-control-label"
            :for="other.description"
          >{{other.description}}</label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    skills: { required: true },
    max: { required: true },
    form: { required: true }
  },
  data() {
    return {
      checkedSkill: [],
      skillOption: {}
    };
  },
  computed: {
    checkedList() {
      this.checkedSkill = [...this.skills.game.filter(g => g)];
      this.checkedSkill = [
        ...this.checkedSkill,
        ...this.skills.entertainment.filter(g => g)
      ];
      this.checkedSkill = [
        ...this.checkedSkill,
        ...this.skills.other.filter(g => g)
      ];
      return this.checkedSkill;
    }
  },
  methods: {
    upDateCheckedSkill(e) {
      this.$emit("up-date-checked-skill", e);
    }
  },
  created() {
    this.skillOption = { ...this.skills };
  },
  mounted() {
    console.log(this.skillOption);
  }
};
</script>
