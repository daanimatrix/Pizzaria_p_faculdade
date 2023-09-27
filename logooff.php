<?php
session_start(); // Inicie a sessão (se não estiver iniciada)

// Encerre a sessão (isso removerá todas as informações da sessão).
session_destroy();
$userInfo = '';
// Redirecione o usuário para a página de login ou outra página de destino.
header("Location: login.php"); // Substitua "login.php" pela página de login real.
exit;
?>
