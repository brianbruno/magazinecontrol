<template>
    <div id="cardsVenda">
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-outline-secondary mb-3 text-center">
                    <div class="card-block">
                        <h3 class="card-title">Vendas realizadas hoje</h3>
                        <h4 class="card-text">R$ 1.988,32</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-outline-secondary mb-3 text-center">
                    <div class="card-block">
                        <h3 class="card-title">Vendas realizadas esse mês</h3>
                        <h4 class="card-text">R$ 120.096,48</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            $( document ).ready(function() {
                console.log( "ready!" );
            });
        }
    }
</script>
