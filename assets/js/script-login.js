const validaLogin = () =>{
    // Exemplo de outra maneira de pegar os dados do form, sem ser por FormData 
    // let email = $('#email').val()
    // let senha = $('#senha').val()

    // console.log(`Eamil:`+email)
    // console.log(`Senha:`+senha)
    
    // return

    let dados = new FormData($('#form-login')[0])

    const result = fetch('backend/validaLogin.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {

             
        Swal.fire({
            icon: result.retorno != 'ok' ? 'error' : '',
            title: result.retorno != 'ok' ? 'Falha ao logar!' : '',
            text: result.retorno != 'ok' ? result.mensagem : '',
            
        })

            result.retorno == 'ok' ? window.location.replace("http://localhost/sistema-escola/admin/index.php") : ''

        })
    
}