<template>
   <div class="panel panel-body" id="container">
   	<chat-message v-for="message in messages" :message="message" :user="user"></chat-message>     
   	<div class="alert alert-warning" v-show="messages.length === 0">No messages yet</div>
   </div>           
   
</template>

<script>
    export default {
    	props:['messages','user']
    }
</script>
