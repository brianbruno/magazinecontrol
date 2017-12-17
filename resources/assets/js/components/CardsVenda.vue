<template>
    <div id="cardsVenda">
        <div class="card deep-purple lighten-5 col s12 m12 l6 z-depth-3">
            <div class="card-content">
                <span class="card-title grey-text text-darken-4">{{ nomeCampo }}</span>
                <h4 class="card-text">{{ valor }}</h4>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        mounted() {
            console.log( "ready!" );
        },
        props: ['valor', 'nomeCampo']
    }
</script>
