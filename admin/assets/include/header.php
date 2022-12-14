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
                    <li><a  href="cadastroUser.php"> <i class="fa-solid fa-user-plus"></i> Cadastro</a></li>
                    <li><a href="cursos.php">  <i class="fa-solid fa-list-ol"></i> Cursos</a></li>
                    <li><a href="notas.php"> <i class="fa-solid fa-graduation-cap"></i> Notas </a></li>
                    <hr>
                    <li><a href="../backend/logout.php"><i class="fa-solid fa-power-off"></i> Sair</a></li>
                </ul>
            </nav>
            
       </aside>