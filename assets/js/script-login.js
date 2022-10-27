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
        // .then((response) => response.json())
        // .then((result) => {

        //     result.retorno == 'ok' ? window.location.replace("http://localhost/sistema-escola/paginaInicial.php") : ''

        // })
    
}