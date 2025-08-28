<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solaris | página do usuário</title>
    <link rel="stylesheet" type="text/css" href="usuario.css">
    <link rel="shortcut icon" type="imagex/png" href="../../icon.ico">
</head>

<body>
<?php 
session_start();
include("../php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: ../login/login.php");
}

$id = $_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");

while($result = mysqli_fetch_assoc($query)){
    $res_Uname = $result['Username'];
    $res_Email = $result['Email'];
    $res_Dob = $result['dob']; 
    $res_id = $result['Id'];
    
    $birthDate = new DateTime($res_Dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;
}
?>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<header>
    <div class="logo">
        <img src="../../index/logo_s.png" style="width: 200px;" alt="Nome do site: Solaris">
    </div>
    
    <nav>
        <div class="menu">
            <a href="../../index.html">Início</a>
            <a href="../../nossojogo.html">Jogos</a>
            <a href="../../materiaisdeapoio.php">Materiais de apoio</a>
            <a href="../../sobrenos.html">Sobre nós</a>
            <button><a href="../login/login.php"><img src="../../index/user.png" style="height: 30px; padding: 1px;" alt="Botão para acessar login"></a></button>
        </div>
    </nav>
</header>

<h1 style="color:rgb(255, 255, 255); font-size: 40px; font-family: Arial, Helvetica, sans-serif; margin-left: 920px; margin-top: 110px;">
    Olá <?php echo $res_Uname?>, seja bem-vindo(a)
</h1>

<main>
    <div id="marg">
        <img src="user.png" class="imagem"/>  
    </div>

    <div class="dados">
        <div id="margem"> 
            <ul>
                <h2 style="color: rgb(70, 67, 67); font-size: 30px; font-family: Arial, Helvetica, sans-serif;">
                    <li>O e-mail registrado é: <?php echo $res_Email?></li>
                    <br>
                    <li>Sua idade é: <?php echo $age ?> anos</li>
                </h2>
            </ul>
            <p style="margin-top: 120px; margin-left: 70px; font-size: 18px; font-family: Arial, Helvetica, sans-serif; color: rgb(70, 67, 67);">Essas informações não são compartilhadas a outros usuários.</p>
        </div>
    </div>

    <div class="login1" style="margin-top: -100px; margin-left: 330px;"> 
        <?php echo "<a href='edit.php?Id=$res_id'><button>Editar</button></a><br><br>"; ?>
    </div>

    <div class="login2" style="margin-left: 330px;"> 
        <button onclick="logout()" style="cursor: pointer;">Sair </button>
    </div>
</main>

<script>
function logout() {
    window.location.href = "../php/logout.php";
}
</script>

</body>
</html>
