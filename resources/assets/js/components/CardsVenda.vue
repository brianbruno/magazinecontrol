<template>
    <div id="app-5">
        <p>{{ message }}</p>
        <button type="button" class="btn btn-magazine" v-on:click="reverseMessage">Reverse Message</button>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data () {
            return {
                message: 'Hello Vue.js!'
            }
        },
        methods: {
            reverseMessage: function () {
            }
        }
    }
</script>
