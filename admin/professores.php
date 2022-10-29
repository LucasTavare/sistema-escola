<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: ../');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SIstema Escola</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="assets/css/style-admin.css">
</head>
<body>
   <div class="container">
       <aside class="admin-menu">
            <div class="admin-logo center"> 
                <img src="assets/img/logo.png" alt="" width="120px">
            </div>
            <nav>
                <ul>
                    <li><a  href="index.php" class="menu-ativo"> <i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                    <li><a  href="professores.php"> <i class="fa-solid fa-chalkboard-user"></i> Professores</a></li>
                    <li><a href="alunos.php">  <i class="fa-solid fa-list-ol"></i> Alunos</a></li>
                    <li><a href="notas.php"> <i class="fa-solid fa-graduation-cap"></i> Notas </a></li>
                    <hr>
                    <li><a href="../backend/logout.php"><i class="fa-solid fa-power-off"></i> Sair</a></li>
                </ul>
            </nav>
            
       </aside>
       <main class="admin-corpo">
           <h2>Gestão de Professores</h2>
           <div class="div-professores">
               <form action="" id="form-professores">
                   <div>
                       <label for="nome">Nome</label>
                       <input type="text" id="nome" name="">
                   </div>
                   <div>
                       <label for="email">E-mail</label>
                       <input type="email" id="email" name="email">
                   </div>
                   <div>
                       <label for="telefone">Telefone</label>
                       <input type="text" id="telefone" name="telefone">
                   </div>
                   <div>
                       <label for="cpf">CPF</label>
                       <input type="text" id="cpf" name="cpf">
                   </div>
                   <div>
                       <label for="cep">CEP</label>
                       <input type="text" id="cep" name="cep">
                       <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                   </div>       
                   <div>
                       <label for="rua">Rua</label>
                       <input type="text" id="rua" name="rua">
                   </div>
                   <div>
                       <label for="numero">Numero</label>
                       <input type="text" id="numero" name="numero">
                   </div>     
                   <div>
                       <label for="bairro">Bairro</label>
                       <input type="text" id="bairro" name="bairro">
                   </div>
                   <div>
                       <label for="cidade">Cidade</label>
                       <input type="text" id="cidade" name="cidade">
                   </div>
                   <div>
                       <label for="estado">Estado</label>
                       <input type="text" id="estado" name="estado">
                   </div>
                   <div>
                       <label for="complemento">Complemento</label>
                       <input type="text" id="complemento" name="complemento">
                   </div>
                   <div class="center">
                   <button type="button" class="btn-cadastro">Cadastrar</button>
                   </div>
                   
               </form>

           </div>
                


       </main>
   </div> 


   <script src="assets/js/script-admin.js"></script>

</body>
</html>