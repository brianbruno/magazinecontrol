<template>
    <div id="dashboardCards">

        <card-dashboard link="/vendas/marcarhorario" texto="Agendar horario"></card-dashboard>
        <card-dashboard link="/vendas/marcarhorario" texto="Registrar venda"></card-dashboard>
        <card-dashboard link="/vendas/produtos#cadProd" texto="Cadastrar produto"></card-dashboard>

        <cards-venda valor="R$ 10.220,69" nome-campo="Vendas hoje"></cards-venda>
        <cards-venda valor="R$ 70.300,55" nome-campo="Vendas essa semana"></cards-venda>
        <cards-venda valor="R$ 185.638,36" nome-campo="Vendas esse mês"></cards-venda>
        <cards-venda valor="R$ 9856,63" nome-campo="Média vendas por dia"></cards-venda>
    </div>

</template>

<script>
    export default {

        mounted() {

        }
    }
</script>
