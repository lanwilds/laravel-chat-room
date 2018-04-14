<template>
    <div class="message " v-bind:class="{ 'message-usr-odd': isUser(message.user.id),'message-usr-even':isNotUser(message.user.id) }">
        <div class="message-sender">
            <h3>{{message.user.name}}</h3>
        </div>
        <div class="message-text">{{ message.message }}
        </div>
    </div>
</template>

<script>
    export default {
    	props:["message","user"],
        data(){
            user:this.user
        },
        methods:{
            isUser(usr){
                return usr == this.user.id;
            },
            isNotUser(usr){
                return usr != this.user.id
            }
        }
    }
</script>
