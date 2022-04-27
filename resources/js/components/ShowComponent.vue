<template>
    <tr v-if="!$parent.isEdit(person.id)">
        <td>{{ person.id }}</td>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td>
            <a href="#" class="btn btn-success" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)">Edit</a>
            <a href="#" class="btn btn-danger" @click.prevent="deletePerson(person.id)">Delete</a>
        </td>
    </tr>
</template>

<script>
export default {
    name: "ShowComponent",

    props:[
        'person'
    ],

    methods:{

        changeEditPersonId(id, name, age, job) {
            this.$parent.editPersonId = id;
            let editName = `edit_${id}`
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.job = job;
        },

        deletePerson(id) {
            axios.delete('/persons/'+id).then(res => {
                this.$parent.getPersons();
            }).catch(error => {
                console.log(error);
            })
        }
    }
}
</script>

<style scoped>

</style>
