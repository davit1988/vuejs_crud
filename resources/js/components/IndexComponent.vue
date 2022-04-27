<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in persons">
                <ShowComponent :person="person"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>

import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",

    data() {
        return {
            persons: null,
            editPersonId:null,
            name: null,
            age: null,
            job: null,
        }
    },
    mounted() {
        this.getPersons();
    },

    methods: {
        getPersons() {
            axios.get('/persons').then(res => {
                this.persons = res.data
            }).catch(error => {
                console.log(error);
            })
        },


        isEdit(id) {
            return this.editPersonId === id;
        },



    },
    components:{
        ShowComponent,
        EditComponent
    }
}
</script>

<style scoped>

</style>
