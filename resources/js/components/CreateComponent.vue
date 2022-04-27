<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" class="form-control" id="name" placeholder="name" v-model="name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="age" placeholder="age" v-model="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="job" placeholder="job" v-model="job">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Add" @click.prevent="addPerson">
        </div>

    </div>


</template>



<script>


export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        addPerson() {
            axios.post('/persons',{name:this.name, age: this.age, job:this.job}).then( res => {
                this.name = null;
                this.age = null;
                this.job = null;
                this.$parent.$refs.index.getPersons();
            }).catch(error => {
                console.log(error)
            })
        }
    },

    components:{
    }
}
</script>

<style scoped>

</style>

