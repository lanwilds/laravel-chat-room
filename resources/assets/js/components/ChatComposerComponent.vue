<template>
	<div>
             <div class="input-group">
                 <input type="text" class="form-control input-message" placeholder="Enter something..." v-model="messageText" @keyup.enter="sendMessage">
                    <span class="input-group-btn" >
                       <button class="btn btn-success" type="button" @click="sendMessage">Send</button>
                    </span>
            </div><!-- /input-group -->
	</div>
</template>

<script>
    export default {
        mounted(){
                
            setInterval(() => {
                this.loadMessage();
                
            },2000);
        },
    	data(){ 
    		return {
    			messageText:''
    		}
    	},
    	methods:{
    		sendMessage(){
                if(this.messageText === '')
                {
                    this.messageText="Enter valid message";
                }
                else
                {
                    this.$emit('messagesent',{
                        message:this.messageText,
                        user:{
                            name:$('.navbar-right .dropdown-toggle').text()
                        }
                    });
                    this.messageText='';
                }
    		},
            loadMessage()
            {
                this.$emit('loadmessage',{

                });
            }
    	}
    }
</script>
