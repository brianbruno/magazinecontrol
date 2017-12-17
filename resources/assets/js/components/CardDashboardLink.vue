<style scoped>

    #cardDash {
        background-color: #2B2B2B;
    }

    h4 {
        color: #CC1C31;
    }


</style>

<template>
    <div id="cardDashboardLink">
        <a :href="link">
            <div id="cardDash" class="card col s12 m12 l4 z-depth-5 hvr-float-shadow">
                <div class="card-content">
                    <h4 class="card-text"><strong>{{ texto }}</strong></h4>
                </div>
            </div>
        </a>
    </div>

</template>

<script>
    export default {

        mounted() {

        },
        props: ['link', 'texto']
    }
</script>
