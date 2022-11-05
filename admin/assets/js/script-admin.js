$(document).ready(function () {

    $('#telefone').inputmask('(99) 99999-9999')
    $('#cpf').inputmask('999-999-999.99')
    $('#cpf').inputmask('999-999-999.99')
    $('#cep').inputmask('99999-999')

    pegaTipo()

});


$("numero").inputmask("(99)99999-9999")

const consultaCep = () => {

    let cep = $('#cep').val()

    cep = cep.replace("_", "")
    cep = cep.replace("-", "")

    if(cep.length < 8){
        Swal.fire({
            icon: 'error',
            title: 'Cep não encontrado',
            text: 'Cep inválido, tente novamente!',  
        })
        $('#cep').focus()
        return
    }


    const result = fetch(`http://viacep.com.br/ws/${cep}/json/`)

    .then((response) => response.json())
    .then((result) => {


        if(result.erro == true){
            Swal.fire({
                icon: 'error',
                title: 'Cep não encontrado',
                text: 'Cep inválido, tente novamente!',
                
            })
        }else{
            $('#rua').val(result.logradouro)
            $('#bairro').val(result.bairro)
            $('#estado').val(result.uf)
            $('#cidade').val(result.localidade)
    
            // coloca focus do usuario no campo numero
            $('#numero').focus()
        }

        })
}

const pegaTipo = () => {

    const result = fetch('../backend/listaTipo.php', {
        method: 'POST',
        body: ''
    })

        .then((response) => response.json())
        .then((result) => {

            result.map(usuario => {

                $('#tipo').append(`
                    <option value="${usuario.id}">${usuario.tipo}</option>
                `)

            })

        })
}

const cadastraUser = () => {

    let dados = new FormData($('#form-cadastro')[0])    

    const result = fetch('../backend/cadastro.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {

            
                Swal.fire({
                    title: 'Atenção',
                    text: result.retorno == 'ok' ? "Cadastro realizado com sucesso!" : result.mensagem,
                    icon: result.retorno == 'ok' ? 'success' : 'error'
                })

                result.retorno == 'ok' ? $('#form-cadastro')[0].reset() : ''
        })

}

// função que exibe a aba cadastro e oculta aba listagem

const abaCadastro = () =>{
    $('#listagem').hide()

    $('#form-cadastro').show()

}

// função que exibe a aba listagem e oculta aba cadastro

const abaListagem = () =>{
    $('#form-cadastro').hide()

    $('#listagem').show()

}

const pesquisarUsuario = () =>{
    let pesquisar = $('#pesquisar').val()

    if(pesquisar == ''){
        Swal.fire({
            title: 'Atenção',
            text: "Digite um nome ou um cpf",
            icon: 'error'
        })
        return
    }

    dados = new FormData($('#form-listagem')[0])

    result = fetch('../backend/pesquisarUsuario.php',{
        method: 'POST',
        body: dados
    })

    .then((response)=>response.json())
    .then((result)=>{
        
    })
}
