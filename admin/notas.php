<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../');
}
?>

<?php
include 'assets/include/header.php'
?>

<main class="admin-corpo">
    <h2>Gestão de Notas</h2>



</main>
</div>



<?php
include 'assets/include/footer.php'
?>