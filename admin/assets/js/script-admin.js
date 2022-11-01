$( document ).ready(function() {

    $('#telefone').inputmask('(99) 99999-9999')
    $('#cpf').inputmask('999-999-999.99')
    $('#cpf').inputmask('999-999-999.99')
    $('#cep').inputmask('99999-999')

});


$("numero").inputmask("(99)99999-9999")

const consultaCep = () => {

    let cep = $('#cep').val()

    cep = cep.replace("_", "")
    cep = cep.replace("-", "")

    if(cep.length < 9){
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