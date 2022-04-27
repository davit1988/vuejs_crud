<template>
    <div>
        <CreateComponent ref="create"></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>

</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "PostComponent",

    data() {
        return {

        }
    },
    mounted() {
    },

    methods: {

    },

    computed: {

    },

    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
