<?php
// session_start();
// if(!isset($_SESSION['email'])){
//     header('Location: ../');
// }
?>

<?php
include '../backend/header.php'
?>

<main class="admin-corpo">
    
    <div class="div-cadastros">
        <div class="tabs">
            <div class="titulo-principal cadastro tab-ativo" onclick="abaCadastro()">
                <p class="titulo-texto center">Cadastro de Usuário</p>
            </div>
            <div class="titulo-principal" onclick="abaListagem()">
            <p class="titulo-texto center listagem">Listagem de Usuário</p>
            </div>
            
        </div>
        <hr>
        <form action="" id="form-cadastro">
            <div>
                <label for="nome">Nome</label>
                <input class="campo-cad" type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="email">E-mail</label>
                <input class="campo-cad" type="email" id="email" name="email">
            </div>
            <div>
                <label for="telefone">Telefone</label>
                <input class="campo-cad" type="text" id="telefone" name="telefone">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input class="campo-cad" type="text" id="cpf" name="cpf">
            </div>
            <div>
                <label for="cep">CEP</label>
                <div class="div-cep">
                    <input class="campo-cad input-cep" type="text" id="cep" name="cep">
                    <button type="button" class="btn-cep" onclick="consultaCep()"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div>
                <label for="rua">Rua</label>
                <input class="campo-cad" type="text" id="rua" name="rua" readonly>
            </div>
            <div>
                <label for="numero">Numero</label>
                <input class="campo-cad" type="text" id="numero" name="numero">
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input class="campo-cad" type="text" id="bairro" name="bairro" readonly>
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <input class="campo-cad" type="text" id="cidade" name="cidade" readonly>
            </div>
            <div>
                <label for="estado">Estado</label>
                <!-- <input type="text" id="estado" name="estado" readonly> -->
                <select class="campo-cad" id="estado" nome="estado">
                    <option value="" selected disabled>Aguarde...</option>
                    <option value="AC"> Acre </option>
                    <option value="AL"> Alagoas </option>
                    <option value="AP"> Amapá </option>
                    <option value="AM"> Amazonas </option>
                    <option value="BA"> Bahia </option>
                    <option value="CE"> Ceará </option>
                    <option value="DF"> Distrito Federal </option>
                    <option value="ES"> Espírito Santo </option>
                    <option value="GO"> Goiás </option>
                    <option value="MA"> Maranhão </option>
                    <option value="MT"> Mato Grosso </option>
                    <option value="MS"> Mato Grosso do Sul </option>
                    <option value="MG"> Minas Gerais </option>
                    <option value="PA"> Pará </option>
                    <option value="PB"> Paraíba </option>
                    <option value="PR"> Paraná </option>
                    <option value="PE"> Pernambuco </option>
                    <option value="PI"> Piauí </option>
                    <option value="RJ"> Rio de Janeiro </option>
                    <option value="RN"> Rio Grande do Norte </option>
                    <option value="RS"> Rio Grande do Sul </option>
                    <option value="RO"> Rondônia </option>
                    <option value="RR"> Roraima </option>
                    <option value="SC"> Santa Catarina </option>
                    <option value="SP"> São Paulo </option>
                    <option value="SE"> Sergipe </option>
                    <option value="TO"> Tocantins </option>
                    <option value="EX"> Estrangeiro </option>
                </select>
            </div>
            <div>
                <label for="complemento">Complemento</label>
                <input class="campo-cad" type="text" id="complemento" name="complemento">
            </div>
            <div>
                <label for="tipo">Cadastro de um...</label>
                <select class="campo-cad" id="tipo" name="tipo">
                    <option value="0" readonly selected>Selecione...</option>
                </select>
            </div>

            <div>
                <label for="nascimento">Data de Nascimento</label>
                <input class="campo-cad" type="date" name="nascimento" id="nascimento">
            </div>

            <div class="center">
                <button type="button" class="campo-cad btn-cadastro" onclick="cadastraUser()"> Cadastrar</button>
            </div>

        </form>



        <!-- LISTAGEM -->


        


    </div>

    <div id="listagem">

            <form id="form-listagem">
                <div>
                    <label for="">Pesquisar Usuários</label>
                    <div class="div-cep">
                        <input class="input-cep" type="text" name="pesquisar" id="pesquisar">
                        <button class="btn-cep" type="button" onclick="pesquisarUsuario()"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
                
            </form>
        </div>

</main>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script src="assets/js/jquery.inputmask.min.js"></script>

<script src="assets/js/script-admin.js"></script>

</body>

</html>