/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('personal-info', require('./components/personalInfo.vue').default);
Vue.component('service-history', require('./components/serviceHistory.vue').default);
Vue.component('academic', require('./components/academic.vue').default);

const app = new Vue({
    el: '#app',
    data:{
        isMarried:false,
        hasChild:false,
        childCount:0,
        missionCount:1,
        checkedSkill:[],
        checkedSkillMax:[],
        hasMax:false,
        checkedOrg:[],
        skillOption:{
            entertainment: [
                {description:'acting',checked:false},
                {description:'dancing',checked:false},
                {description:'singing',checked:false},
                {description:'stand-up comedy',checked:false}
            ],
            game:[
                {description:'cricket',checked:false},
                {description:'football',checked:false},
                {description:'handball',checked:false},
                {description:'high-jump',checked:false},
                {description:'long-jump',checked:false},
                {description:'swimming',checked:false},
                {description:'runing',checked:false}
            ],
            other:[
                {description:'cooking',checked:false},
                {description:'driving',checked:false},
                {description:'writing',checked:false},
                {description:'drawing & painting',checked:false}
            ]
        },
        orgOption:[
            {description:'lancer 9',checked:false},
            {description:'Acc',checked:false},
            {description:'Arms',checked:false}
        ],
        formValue:{
            personal:{
                fullName:'',
                snkNumber:'',
                rank:'',
                trade:'',
                medical:'',
                email:'',
                mobileNumber:0,
                NIDNumber:0,
                IMENumber:0,
                gender:'',
                height:0,
                birthDate:'',
                bloodGroup:''

            },
            academic:{}
        }
    },
    computed:{
        checkedList(){
            this.checkedSkill = [...this.skillOption.game.filter(g => g)];
            this.checkedSkill = [...this.checkedSkill,...this.skillOption.entertainment.filter(g => g)];
            this.checkedSkill = [...this.checkedSkill,...this.skillOption.other.filter(g => g)];
            return this.checkedSkill;
        },
        updatedChildCount(){
            this.hasChild = this.childCount > 0 ?  true : false;
            return Number(this.childCount);
        }
        
    },
    methods:{
        upDateCheckedSkill(e){
            let i = _.indexOf(this.checkedSkillMax,e);
            i > -1 ? _.pull(this.checkedSkillMax, e) : this.checkedSkillMax.push(e);
            this.hasMax = this.checkedSkillMax.length >= 5 ?  true : false;
            this.checkedSkill.filter(g => { 
                if(g.description == e) g.checked ? g.checked=false : g.checked=true;
            });
            // !this.hasMax || alert('Just reached max skill allowed to be added!!\nYou may removed from your selection to check new item.');
        },
        upDateMarried(){
            this.isMarried = this.isMarried ? false : true;
            this.childCount = ! this.isMarried ? 0 : this.childCount; 
        }

    }
});

// jquery
function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#proimg').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#imgInp").change(function() {
    readURL(this);
  });
