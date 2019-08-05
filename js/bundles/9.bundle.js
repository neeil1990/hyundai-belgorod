<<<<<<< HEAD
webpackJsonp([9],{B1oq:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("transition",{attrs:{name:"popup"}},[a("div",{directives:[{name:"show",rawName:"v-show",value:t.isOpened,expression:"isOpened"}],staticClass:"p-new df-popup"},[a("div",{staticClass:"p-new__wrap df-popup__wrap",on:{mousedown:function(e){return e.target!==e.currentTarget?null:t.closeThis(e)}}},[a("div",{staticClass:"p-new__center df-popup__center"},[a("a",{staticClass:"p-new__close df-popup__close",attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),t.closeThis(e)}}},[a("svg",{attrs:{width:"16",height:"16",viewBox:"0 0 16 16",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[a("rect",{attrs:{y:"14.5454",width:"20.5702",height:"2.05702",transform:"rotate(-45 0 14.5454)"}}),t._v(" "),a("rect",{attrs:{x:"1.45459",width:"20.5702",height:"2.05702",transform:"rotate(45 1.45459 0)"}})])]),t._v(" "),a("h3",{staticClass:"p-new__title"},[t._v("Оставить заявку на мероприятие")]),t._v(" "),a("div",{staticClass:"p-new__body"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.title,expression:"data.title"}],staticClass:"df-input-bordered p-new__input p-new__input--100",class:{invalid:!t.validation.title},attrs:{type:"text",name:"title",id:"title",placeholder:"Название мероприятия"},domProps:{value:t.data.title},on:{blur:function(e){t.focusLost("title")},input:function(e){e.target.composing||t.$set(t.data,"title",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.description,expression:"data.description"}],staticClass:"df-input-bordered p-new__input p-new__input--100",class:{invalid:!t.validation.description},attrs:{type:"text",name:"description",id:"description",placeholder:"Описание мероприятия"},domProps:{value:t.data.description},on:{blur:function(e){t.focusLost("description")},input:function(e){e.target.composing||t.$set(t.data,"description",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"mask",rawName:"v-mask",value:{regex:"[0-3]{1}[0-9]{1}\\.[0-1]{1}[0-9]{1}\\.[0-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}"},expression:"{ regex: '[0-3]{1}[0-9]{1}\\\\.[0-1]{1}[0-9]{1}\\\\.[0-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}' }"},{name:"model",rawName:"v-model",value:t.data.date,expression:"data.date"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.date},attrs:{type:"text",name:"date",id:"date",placeholder:"Дата проведения"},domProps:{value:t.data.date},on:{blur:function(e){t.focusLost("date")},input:function(e){e.target.composing||t.$set(t.data,"date",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.time,expression:"data.time"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.time},attrs:{type:"text",name:"time",id:"time",placeholder:"Время проведения"},domProps:{value:t.data.time},on:{blur:function(e){t.focusLost("time")},input:function(e){e.target.composing||t.$set(t.data,"time",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.members,expression:"data.members"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.members},attrs:{type:"number",name:"members",id:"members",placeholder:"Кол-во участников"},domProps:{value:t.data.members},on:{blur:function(e){t.focusLost("members")},input:function(e){e.target.composing||t.$set(t.data,"members",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.guests,expression:"data.guests"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.guests},attrs:{type:"number",name:"guests",id:"guests",placeholder:"Гости"},domProps:{value:t.data.guests},on:{blur:function(e){t.focusLost("guests")},input:function(e){e.target.composing||t.$set(t.data,"guests",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.timing,expression:"data.timing"}],staticClass:"df-input-bordered p-new__input p-new__input--100",class:{invalid:!t.validation.timing},attrs:{type:"text",name:"timing",id:"timing",placeholder:"Примерный тайминг мероприятия"},domProps:{value:t.data.timing},on:{blur:function(e){t.focusLost("timing")},input:function(e){e.target.composing||t.$set(t.data,"timing",e.target.value)}}}),t._v(" "),a("label",{staticClass:"p-new__catering"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.catering,expression:"data.catering"}],attrs:{type:"checkbox",name:"catering",id:"catering"},domProps:{checked:Array.isArray(t.data.catering)?t._i(t.data.catering,null)>-1:t.data.catering},on:{change:function(e){var a=t.data.catering,i=e.target,s=!!i.checked;if(Array.isArray(a)){var n=t._i(a,null);i.checked?n<0&&t.$set(t.data,"catering",a.concat([null])):n>-1&&t.$set(t.data,"catering",a.slice(0,n).concat(a.slice(n+1)))}else t.$set(t.data,"catering",s)}}}),t._v(" "),a("div",{staticClass:"p-new__box"},[a("svg",{attrs:{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[a("path",{attrs:{d:"M1 5.2L5 8L9 1",stroke:"#002C5F","stroke-width":"2"}})])]),t._v(" "),a("div",{staticClass:"p-new__description"},[t._v("Нужен кейтеринг")])]),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.fio,expression:"data.fio"}],staticClass:"df-input-bordered p-new__input p-new__input--100",class:{invalid:!t.validation.fio},attrs:{type:"text",name:"fio",id:"fio",placeholder:"ФИО организатора"},domProps:{value:t.data.fio},on:{blur:function(e){t.focusLost("fio")},input:function(e){e.target.composing||t.$set(t.data,"fio",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.email,expression:"data.email"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.email},attrs:{type:"email",name:"email",id:"email",placeholder:"Email организатора"},domProps:{value:t.data.email},on:{blur:function(e){t.focusLost("email")},input:function(e){e.target.composing||t.$set(t.data,"email",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"mask",rawName:"v-mask",value:"+7(999)-999-99-99",expression:"'+7(999)-999-99-99'"},{name:"model",rawName:"v-model",value:t.data.tel,expression:"data.tel"}],staticClass:"df-input-bordered p-new__input",class:{invalid:!t.validation.tel},attrs:{type:"tel",name:"tel",id:"tel",placeholder:"Телефон организатора"},domProps:{value:t.data.tel},on:{blur:function(e){t.focusLost("tel")},input:function(e){e.target.composing||t.$set(t.data,"tel",e.target.value)}}}),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.about,expression:"data.about"}],staticClass:"df-input-bordered p-new__input p-new__input--100",class:{invalid:!t.validation.about},attrs:{type:"text",name:"about",id:"about",placeholder:"Расскажите о себе"},domProps:{value:t.data.about},on:{blur:function(e){t.focusLost("about")},input:function(e){e.target.composing||t.$set(t.data,"about",e.target.value)}}}),t._v(" "),a("label",{staticClass:"p-new__accept"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.accept,expression:"data.accept"}],class:{invalid:!t.validation.accept},attrs:{type:"checkbox",name:"accept",id:"accept"},domProps:{checked:Array.isArray(t.data.accept)?t._i(t.data.accept,null)>-1:t.data.accept},on:{change:function(e){var a=t.data.accept,i=e.target,s=!!i.checked;if(Array.isArray(a)){var n=t._i(a,null);i.checked?n<0&&t.$set(t.data,"accept",a.concat([null])):n>-1&&t.$set(t.data,"accept",a.slice(0,n).concat(a.slice(n+1)))}else t.$set(t.data,"accept",s)}}}),t._v(" "),a("div",{staticClass:"p-new__box"},[a("svg",{attrs:{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[a("path",{attrs:{d:"M1 5.2L5 8L9 1",stroke:"#002C5F","stroke-width":"2"}})])]),t._v(" "),a("div",{staticClass:"p-new__description"},[t._v("Я согласен на обработку данных "),a("a",{attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),t.openRules(e)}}},[t._v("Смотреть правила")])])]),t._v(" "),a("label",{staticClass:"p-new__accept"},[a("input",{directives:[{name:"model",rawName:"v-model",value:t.data.accept1,expression:"data.accept1"}],class:{invalid:!t.validation.accept1},attrs:{type:"checkbox",name:"accept1",id:"accept1"},domProps:{checked:Array.isArray(t.data.accept1)?t._i(t.data.accept1,null)>-1:t.data.accept1},on:{change:function(e){var a=t.data.accept1,i=e.target,s=!!i.checked;if(Array.isArray(a)){var n=t._i(a,null);i.checked?n<0&&t.$set(t.data,"accept1",a.concat([null])):n>-1&&t.$set(t.data,"accept1",a.slice(0,n).concat(a.slice(n+1)))}else t.$set(t.data,"accept1",s)}}}),t._v(" "),a("div",{staticClass:"p-new__box"},[a("svg",{attrs:{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[a("path",{attrs:{d:"M1 5.2L5 8L9 1",stroke:"#002C5F","stroke-width":"2"}})])]),t._v(" "),a("div",{staticClass:"p-new__description"},[t._v("Я ознакомлен с правилами студии "),a("a",{attrs:{href:"/assets/pdf/motorstudio/ms_rules.pdf",target:"_blank"}},[t._v("Смотреть правила")])])])]),t._v(" "),a("div",{staticClass:"p-new__footer"},[a("button",{staticClass:"df-button",attrs:{disabled:t.sending},on:{click:t.checkout}},[t._v(t._s(t.sending?"Отправка...":"Отправить заявку"))])])])])])])},staticRenderFns:[]}},ajzQ:function(t,e,a){var i=a("VU/8")(a("xbgK"),a("B1oq"),null,null,null);t.exports=i.exports},xbgK:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i);e.default={name:"NewEventPopup",props:{isOpened:{type:Boolean,required:!0}},components:{},data:function(){return{data:{title:"",description:"",date:"",time:"",members:"",guests:"",timing:"",catering:!1,fio:"",email:"",tel:"",about:"",accept:!1,accept1:!1},blur:{title:!1,description:!1,date:!1,time:!1,members:!1,guests:!1,timing:!1,fio:!1,email:!1,tel:!1,about:!1},process:!1,sending:!1}},computed:{validation:function(){return{email:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(this.data.email)||!this.blur.email&&!this.process,title:""!==this.data.title.trim()||!this.blur.title&&!this.process,description:""!==this.data.description.trim()||!this.blur.description&&!this.process,date:""!==this.data.date.trim()||!this.blur.date&&!this.process,time:""!==this.data.time.trim()||!this.blur.time&&!this.process,members:""!==this.data.members.trim()||!this.blur.members&&!this.process,guests:""!==this.data.guests.trim()||!this.blur.guests&&!this.process,timing:""!==this.data.timing.trim()||!this.blur.timing&&!this.process,fio:""!==this.data.fio.trim()||!this.blur.fio&&!this.process,tel:""!==this.data.tel.trim()||!this.blur.tel&&!this.process,about:""!==this.data.about.trim()||!this.blur.about&&!this.process,accept:this.data.accept||!this.process,accept1:this.data.accept1||!this.process}},isValid:function(){var t=this;return Object.keys(this.validation).every(function(e){return t.validation[e]})}},methods:{closeThis:function(){this.$emit("close")},focusLost:function(t){this.blur[t]=!0},openRules:function(){this.$store.dispatch("OPEN_RULES",!0)},checkout:function(){var t=this;this.process=!0,this.isValid&&(this.sending=!0,t.$emit("open-success"),s.a.post(this.$store.state.API.NEW_EVENT_MOTORSTUDION_FORM,this.data).then(function(e){if(1!==e.data.status)throw new Error("Ошибка");t.$emit("open-success"),t.sending=!1}).catch(function(e){t.$root.$emit("notify",{type:"error",text:"Ошибка отправки формы, повторите попытку позднее"}),console.log(e),t.sending=!1}))}},filters:{},mounted:function(){this.$nextTick(function(){})},watch:{}}}});
=======
webpackJsonp([9],{

/***/ "./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}],\"syntax-dynamic-import\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/js/vue/components/motorstudio/NewEventPopup.vue":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios__ = __webpack_require__("./node_modules/axios/index.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_axios___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_axios__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
	name: 'NewEventPopup',
	props: {
		isOpened: {
			type: Boolean,
			required: true
		}
	},
	components: {},
	data: function data() {
		return {
			data: {
				title: '',
				description: '',
				date: '',
				time: '',
				members: '',
				guests: '',
				timing: '',
				catering: false,
				fio: '',
				email: '',
				tel: '',
				about: '',
				accept: false,
				accept1: false
			},
			blur: {
				title: false,
				description: false,
				date: false,
				time: false,
				members: false,
				guests: false,
				timing: false,
				fio: false,
				email: false,
				tel: false,
				about: false
			},
			process: false,
			sending: false
		};
	},

	computed: {
		validation: function validation() {
			var reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return {
				email: reEmail.test(this.data.email) || !this.blur.email && !this.process,
				title: this.data.title.trim() !== '' || !this.blur.title && !this.process,
				description: this.data.description.trim() !== '' || !this.blur.description && !this.process,
				date: this.data.date.trim() !== '' || !this.blur.date && !this.process,
				time: this.data.time.trim() !== '' || !this.blur.time && !this.process,
				members: this.data.members.trim() !== '' || !this.blur.members && !this.process,
				guests: this.data.guests.trim() !== '' || !this.blur.guests && !this.process,
				timing: this.data.timing.trim() !== '' || !this.blur.timing && !this.process,
				fio: this.data.fio.trim() !== '' || !this.blur.fio && !this.process,
				tel: this.data.tel.trim() !== '' || !this.blur.tel && !this.process,
				about: this.data.about.trim() !== '' || !this.blur.about && !this.process,
				accept: this.data.accept || !this.process,
				accept1: this.data.accept1 || !this.process
			};
		},
		isValid: function isValid() {
			var _this = this;

			return Object.keys(this.validation).every(function (key) {
				return _this.validation[key];
			});
		}
	},
	methods: {
		closeThis: function closeThis() {
			this.$emit('close');
		},
		focusLost: function focusLost(name) {
			this.blur[name] = true;
		},
		openRules: function openRules() {
			this.$store.dispatch('OPEN_RULES', true);
		},
		checkout: function checkout() {
			var that = this;

			this.process = true;

			if (this.isValid) {
				this.sending = true;
				that.$emit('open-success');

				__WEBPACK_IMPORTED_MODULE_0_axios___default.a.post(this.$store.state.API.NEW_EVENT_MOTORSTUDION_FORM, this.data).then(function (response) {
					if (response.data.status === 1) {
						that.$emit('open-success');
						that.sending = false;
					} else {
						throw new Error('Ошибка');
					}
				}).catch(function (error) {
					that.$root.$emit('notify', { type: 'error', text: 'Ошибка отправки формы, повторите попытку позднее' });
					console.log(error);
					that.sending = false;
				});
			}
		},
		onEnter: function onEnter() {
			this.$root.$emit('fixOverflow', true);
		},
		onLeave: function onLeave() {
			this.$root.$emit('fixOverflow', false);
		}
	},
	filters: {},
	mounted: function mounted() {
		var that = this;

		this.$nextTick(function () {});
	},

	watch: {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-504d36f8\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/js/vue/components/motorstudio/NewEventPopup.vue":
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('transition', {
    attrs: {
      "name": "popup"
    },
    on: {
      "enter": _vm.onEnter,
      "leave": _vm.onLeave
    }
  }, [_c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.isOpened),
      expression: "isOpened"
    }],
    staticClass: "p-new df-popup"
  }, [_c('div', {
    staticClass: "p-new__wrap df-popup__wrap",
    on: {
      "mousedown": function($event) {
        if ($event.target !== $event.currentTarget) { return null; }
        return _vm.closeThis($event)
      }
    }
  }, [_c('div', {
    staticClass: "p-new__center df-popup__center"
  }, [_c('a', {
    staticClass: "p-new__close df-popup__close",
    attrs: {
      "href": "#"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        return _vm.closeThis($event)
      }
    }
  }, [_c('svg', {
    attrs: {
      "width": "16",
      "height": "16",
      "viewBox": "0 0 16 16",
      "fill": "none",
      "xmlns": "http://www.w3.org/2000/svg"
    }
  }, [_c('rect', {
    attrs: {
      "y": "14.5454",
      "width": "20.5702",
      "height": "2.05702",
      "transform": "rotate(-45 0 14.5454)"
    }
  }), _vm._v(" "), _c('rect', {
    attrs: {
      "x": "1.45459",
      "width": "20.5702",
      "height": "2.05702",
      "transform": "rotate(45 1.45459 0)"
    }
  })])]), _vm._v(" "), _c('h3', {
    staticClass: "p-new__title"
  }, [_vm._v("Оставить заявку на мероприятие")]), _vm._v(" "), _c('div', {
    staticClass: "p-new__body"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.title),
      expression: "data.title"
    }],
    staticClass: "df-input-bordered p-new__input p-new__input--100",
    class: {
      'invalid': !_vm.validation.title
    },
    attrs: {
      "type": "text",
      "name": "title",
      "id": "title",
      "placeholder": "Название мероприятия"
    },
    domProps: {
      "value": (_vm.data.title)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('title')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "title", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.description),
      expression: "data.description"
    }],
    staticClass: "df-input-bordered p-new__input p-new__input--100",
    class: {
      'invalid': !_vm.validation.description
    },
    attrs: {
      "type": "text",
      "name": "description",
      "id": "description",
      "placeholder": "Описание мероприятия"
    },
    domProps: {
      "value": (_vm.data.description)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('description')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "description", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "mask",
      rawName: "v-mask",
      value: ({
        regex: '[0-3]{1}[0-9]{1}\\.[0-1]{1}[0-9]{1}\\.[0-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}'
      }),
      expression: "{ regex: '[0-3]{1}[0-9]{1}\\\\.[0-1]{1}[0-9]{1}\\\\.[0-2]{1}[0-9]{1}[0-9]{1}[0-9]{1}' }"
    }, {
      name: "model",
      rawName: "v-model",
      value: (_vm.data.date),
      expression: "data.date"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.date
    },
    attrs: {
      "type": "text",
      "name": "date",
      "id": "date",
      "placeholder": "Дата проведения"
    },
    domProps: {
      "value": (_vm.data.date)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('date')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "date", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.time),
      expression: "data.time"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.time
    },
    attrs: {
      "type": "text",
      "name": "time",
      "id": "time",
      "placeholder": "Время проведения"
    },
    domProps: {
      "value": (_vm.data.time)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('time')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "time", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.members),
      expression: "data.members"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.members
    },
    attrs: {
      "type": "number",
      "name": "members",
      "id": "members",
      "placeholder": "Кол-во участников"
    },
    domProps: {
      "value": (_vm.data.members)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('members')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "members", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.guests),
      expression: "data.guests"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.guests
    },
    attrs: {
      "type": "number",
      "name": "guests",
      "id": "guests",
      "placeholder": "Гости"
    },
    domProps: {
      "value": (_vm.data.guests)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('guests')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "guests", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.timing),
      expression: "data.timing"
    }],
    staticClass: "df-input-bordered p-new__input p-new__input--100",
    class: {
      'invalid': !_vm.validation.timing
    },
    attrs: {
      "type": "text",
      "name": "timing",
      "id": "timing",
      "placeholder": "Примерный тайминг мероприятия"
    },
    domProps: {
      "value": (_vm.data.timing)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('timing')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "timing", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('label', {
    staticClass: "p-new__catering"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.catering),
      expression: "data.catering"
    }],
    attrs: {
      "type": "checkbox",
      "name": "catering",
      "id": "catering"
    },
    domProps: {
      "checked": Array.isArray(_vm.data.catering) ? _vm._i(_vm.data.catering, null) > -1 : (_vm.data.catering)
    },
    on: {
      "change": function($event) {
        var $$a = _vm.data.catering,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$el.checked) {
            $$i < 0 && (_vm.$set(_vm.data, "catering", $$a.concat([$$v])))
          } else {
            $$i > -1 && (_vm.$set(_vm.data, "catering", $$a.slice(0, $$i).concat($$a.slice($$i + 1))))
          }
        } else {
          _vm.$set(_vm.data, "catering", $$c)
        }
      }
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "p-new__box"
  }, [_c('svg', {
    attrs: {
      "width": "10",
      "height": "10",
      "viewBox": "0 0 10 10",
      "fill": "none",
      "xmlns": "http://www.w3.org/2000/svg"
    }
  }, [_c('path', {
    attrs: {
      "d": "M1 5.2L5 8L9 1",
      "stroke": "#002C5F",
      "stroke-width": "2"
    }
  })])]), _vm._v(" "), _c('div', {
    staticClass: "p-new__description"
  }, [_vm._v("Нужен кейтеринг")])]), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.fio),
      expression: "data.fio"
    }],
    staticClass: "df-input-bordered p-new__input p-new__input--100",
    class: {
      'invalid': !_vm.validation.fio
    },
    attrs: {
      "type": "text",
      "name": "fio",
      "id": "fio",
      "placeholder": "ФИО организатора"
    },
    domProps: {
      "value": (_vm.data.fio)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('fio')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "fio", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.email),
      expression: "data.email"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.email
    },
    attrs: {
      "type": "email",
      "name": "email",
      "id": "email",
      "placeholder": "Email организатора"
    },
    domProps: {
      "value": (_vm.data.email)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('email')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "email", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "mask",
      rawName: "v-mask",
      value: ('+7(999)-999-99-99'),
      expression: "'+7(999)-999-99-99'"
    }, {
      name: "model",
      rawName: "v-model",
      value: (_vm.data.tel),
      expression: "data.tel"
    }],
    staticClass: "df-input-bordered p-new__input",
    class: {
      'invalid': !_vm.validation.tel
    },
    attrs: {
      "type": "tel",
      "name": "tel",
      "id": "tel",
      "placeholder": "Телефон организатора"
    },
    domProps: {
      "value": (_vm.data.tel)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('tel')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "tel", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.about),
      expression: "data.about"
    }],
    staticClass: "df-input-bordered p-new__input p-new__input--100",
    class: {
      'invalid': !_vm.validation.about
    },
    attrs: {
      "type": "text",
      "name": "about",
      "id": "about",
      "placeholder": "Расскажите о себе"
    },
    domProps: {
      "value": (_vm.data.about)
    },
    on: {
      "blur": function($event) {
        _vm.focusLost('about')
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.$set(_vm.data, "about", $event.target.value)
      }
    }
  }), _vm._v(" "), _c('label', {
    staticClass: "p-new__accept"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.accept),
      expression: "data.accept"
    }],
    class: {
      'invalid': !_vm.validation.accept
    },
    attrs: {
      "type": "checkbox",
      "name": "accept",
      "id": "accept"
    },
    domProps: {
      "checked": Array.isArray(_vm.data.accept) ? _vm._i(_vm.data.accept, null) > -1 : (_vm.data.accept)
    },
    on: {
      "change": function($event) {
        var $$a = _vm.data.accept,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$el.checked) {
            $$i < 0 && (_vm.$set(_vm.data, "accept", $$a.concat([$$v])))
          } else {
            $$i > -1 && (_vm.$set(_vm.data, "accept", $$a.slice(0, $$i).concat($$a.slice($$i + 1))))
          }
        } else {
          _vm.$set(_vm.data, "accept", $$c)
        }
      }
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "p-new__box"
  }, [_c('svg', {
    attrs: {
      "width": "10",
      "height": "10",
      "viewBox": "0 0 10 10",
      "fill": "none",
      "xmlns": "http://www.w3.org/2000/svg"
    }
  }, [_c('path', {
    attrs: {
      "d": "M1 5.2L5 8L9 1",
      "stroke": "#002C5F",
      "stroke-width": "2"
    }
  })])]), _vm._v(" "), _c('div', {
    staticClass: "p-new__description"
  }, [_vm._v("Я согласен на обработку данных "), _c('a', {
    attrs: {
      "href": "#"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        return _vm.openRules($event)
      }
    }
  }, [_vm._v("Смотреть правила")])])]), _vm._v(" "), _c('label', {
    staticClass: "p-new__accept"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.data.accept1),
      expression: "data.accept1"
    }],
    class: {
      'invalid': !_vm.validation.accept1
    },
    attrs: {
      "type": "checkbox",
      "name": "accept1",
      "id": "accept1"
    },
    domProps: {
      "checked": Array.isArray(_vm.data.accept1) ? _vm._i(_vm.data.accept1, null) > -1 : (_vm.data.accept1)
    },
    on: {
      "change": function($event) {
        var $$a = _vm.data.accept1,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$el.checked) {
            $$i < 0 && (_vm.$set(_vm.data, "accept1", $$a.concat([$$v])))
          } else {
            $$i > -1 && (_vm.$set(_vm.data, "accept1", $$a.slice(0, $$i).concat($$a.slice($$i + 1))))
          }
        } else {
          _vm.$set(_vm.data, "accept1", $$c)
        }
      }
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "p-new__box"
  }, [_c('svg', {
    attrs: {
      "width": "10",
      "height": "10",
      "viewBox": "0 0 10 10",
      "fill": "none",
      "xmlns": "http://www.w3.org/2000/svg"
    }
  }, [_c('path', {
    attrs: {
      "d": "M1 5.2L5 8L9 1",
      "stroke": "#002C5F",
      "stroke-width": "2"
    }
  })])]), _vm._v(" "), _c('div', {
    staticClass: "p-new__description"
  }, [_vm._v("Я ознакомлен с правилами студии "), _c('a', {
    attrs: {
      "href": "/assets/pdf/motorstudio/ms_rules.pdf",
      "target": "_blank"
    }
  }, [_vm._v("Смотреть правила")])])])]), _vm._v(" "), _c('div', {
    staticClass: "p-new__footer"
  }, [_c('button', {
    staticClass: "df-button",
    attrs: {
      "disabled": _vm.sending
    },
    on: {
      "click": _vm.checkout
    }
  }, [_vm._v(_vm._s(_vm.sending ? 'Отправка...' : 'Отправить заявку'))])])])])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-504d36f8", module.exports)
  }
}

/***/ }),

/***/ "./resources/js/vue/components/motorstudio/NewEventPopup.vue":
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__("./node_modules/vue-loader/lib/component-normalizer.js")(
  /* script */
  __webpack_require__("./node_modules/babel-loader/lib/index.js?{\"cacheDirectory\":true,\"presets\":[[\"env\",{\"modules\":false,\"targets\":{\"browsers\":[\"> 2%\"],\"uglify\":true}}]],\"plugins\":[\"transform-object-rest-spread\",[\"transform-runtime\",{\"polyfill\":false,\"helpers\":false}],\"syntax-dynamic-import\"]}!./node_modules/vue-loader/lib/selector.js?type=script&index=0!./resources/js/vue/components/motorstudio/NewEventPopup.vue"),
  /* template */
  __webpack_require__("./node_modules/vue-loader/lib/template-compiler/index.js?{\"id\":\"data-v-504d36f8\",\"hasScoped\":false}!./node_modules/vue-loader/lib/selector.js?type=template&index=0!./resources/js/vue/components/motorstudio/NewEventPopup.vue"),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "D:\\OpenServer\\OSPanel\\domains\\hyundai\\www\\resources\\js\\vue\\components\\motorstudio\\NewEventPopup.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] NewEventPopup.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-504d36f8", Component.options)
  } else {
    hotAPI.reload("data-v-504d36f8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});
>>>>>>> scroll-overflow
