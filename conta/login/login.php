<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<title>solaris | login</title>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="shortcut icon" type="imagex/png" href="../../icon.ico">
</head>

<body>
<?php 
session_start();

if(isset($_SESSION['valid'])) {
    header("Location: ../usuario/usuario.php");
    exit();
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
  <button><a href="login.php"><img src="../../index/user.png" style="height: 30px; padding: 1px;" alt="Botão para acessar login"></button></a>
</div>
</nav>
</header>

<div class="container">
    <div class="box form-box">
        <?php 
        include("../php/config.php");
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);

            $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['Email'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['id'] = $row['Id'];
            }else{
                echo "<div class='message'>
                      <p>Usuário ou senha errados</p>
                       </div> <br>";
                echo "<a href='login.php'><button class='btn'>Tentar novamente</button>";
            }
            if(isset($_SESSION['valid'])){
                header("Location: ../usuario/usuario.php");
                exit();
            }
        }else{
        ?>
        <div class="login">Login</div>
        <form action="" method="post">
            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </div>
            <div class="links">
                Não tem uma conta? <a href="../signup/signup.php">Crie uma</a>
            </div>
        </form>
    </div>
    <?php } ?>
</div>
</main>
</body>
</html>