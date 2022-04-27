<template>
        <tr v-if="this.$parent.isEdit(person.id)">
            <td></td>
            <td><input type="text" class="form-control" v-model="name"></td>
            <td><input type="text" class="form-control" v-model="age"></td>
            <td><input type="text" class="form-control" v-model="job"></td>
            <td><a href="#" class="btn btn-success" @click.prevent="updateEditPersonId(person.id)">Update</a></td>
        </tr>
</template>

<script>
export default {
    name: "EditComponent",

    props:[
        'person'
    ],

    data() {
        return {
            name:null,
            age:null,
            job:null,
        }
    },

    methods: {
        updateEditPersonId(id) {
            axios.patch('/persons/' + id, {name: this.name, age: this.age, job: this.job}).then(res => {
                this.$parent.editPersonId = null;
                this.$parent.getPersons();
            }).catch(error => {
                console.log(error);
            })
        },
    }
}
</script>

<style scoped>

</style>
