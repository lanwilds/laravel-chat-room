
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('chat-log', require('./components/ChatLogComponent.vue'));
Vue.component('chat-message', require('./components/ChatMessageComponent.vue'));
Vue.component('chat-composer', require('./components/ChatComposerComponent.vue'));

const app = new Vue({
    el: '#app',
    data:{
    		messages:[],
            baseurl:window.baseurl,
            user:null
    },
    init(){
            var container = this.$el.querySelector("#container");
            container.scrollTop = container.scrollHeight;
    },
    methods:{
    	addMessage(message){
    		this.messages.push(message);
    		axios.post(this.baseurl+'/message',message).then(response=>{

    			
    		});
    	},
        getMessages(){
            
            axios.get(this.baseurl+'/messages').then(response=>{
                this.messages = response.data.messages;
                var container = this.$el.querySelector("#container");
                container.scrollTop = container.scrollHeight;
 
            });         
        }
    },
    created(){
    	axios.get(this.baseurl+'/messages').then(response=>{
    		this.messages = response.data.messages;
            this.user = response.data.user;
    	});
    }
});
