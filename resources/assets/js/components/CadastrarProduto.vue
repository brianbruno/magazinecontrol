<template>
    <div id="cadastrarProduto">
        <form class="col s12" action="#" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <h4>Cadastrar produto</h4>
            <div class="row">
                <div class="input-field col s6">
                    <input id="codigoProduto" name="CDPRODUTO" type="text" maxlength="11" pattern="\d*" class="validate" required>
                    <label for="codigoProduto">Código</label>
                    <div id="divUnicoCod">
                        <div class="row">
                            <div class="col s2">
                                <div class="preloader-wrapper small active">
                                    <div class="spinner-layer spinner-green-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s10">
                                <p>Checando disponibilidade do código...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-field col s6">
                    <input id="nomeProduto" name="NMPRODUTO" type="text" class="validate" maxlength="100" required>
                    <label for="nomeProduto">Nome</label>
                </div>
            </div>
            <div class="right">
                <button type="submit" id="btnCadProd" disabled class="modal-action waves-effect waves-green btn-flat">Cadastrar</button>
            </div>
        </form>
    </div>

</template>

<script>
    export default {

        mounted() {

        },
        props: ['link', 'texto']
    }
</script>
