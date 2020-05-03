<template>


    <button :class="'btn  '+[current_follow ? 'btn-outline-secondary' : 'btn-secondary']" @click="toggleFollow">{{ followUnfollow }}</button>
</template>

<script>
export default {

    props: [
        'follows' , 'user_id'
    ],

    mounted() {
        if(this.follows) {
            this.current_follow = true
        }
    },

    data: () => ({
        current_follow: false
    }),

    // Functions that we can call inside template
    methods: { 
        toggleFollow() {
            //debugger;
            if(this.current_follow) {
                this.unfollow()
            } else {
                this.follow()
            }
            // this.current_follow = !this.current_follow
            
        },
        follow() {
            const that = this;
            axios.post("/follow", {
                user_id : this.user_id
            }).then( function (response) {
                // console.log(response)
                // 
                if(response.data && response.data.status && response.data.status == "success") { // here is a condition to check response.data has status and it should have success returned in data

                    that.current_follow = !that.current_follow

                    that.$emit('updated', response.data)
                }

                // debugger
            })
        },
        unfollow() {
            axios.post("/unfollow", {
                user_id : this.user_id
            }).then( (response) => {
                // console.log(response){
                    if(response.data && response.data.status && response.data.status == "success") {

                        this.current_follow = !this.current_follow
                        this.$emit('updated', response.data)   
                    }
                // debugger
            })
        }
    },
    computed: {
        followUnfollow() {
            return this.current_follow ? "Unfollow" : "Follow"
        }
    }

}
</script>