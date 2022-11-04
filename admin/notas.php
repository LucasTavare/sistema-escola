<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: ../');
    }
?>

<?php
    include '../backend/header.php'
?>

       <main class="admin-corpo">
           <h2>Gestão de Notas</h2>
                


       </main>
   </div> 


   <script src="assets/js/script-admin.js"></script>

</body>
</html>