<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="usuario.css">
<title>solaris | editar</title>

<link rel="stylesheet" type="text/css" href="edit.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="shortcut icon" type="imagex/png" href="../../icon.ico">
</head>

<body>

<?php 
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../../login/login.php");
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
  <button><a href="../login/login.php"><img src="../../index/user.png" style="height: 30px; padding: 1px;" alt="Botão para acessar login"></button></a>
</div>
</nav>
</header>

<body>

    <div id="marg" style="margin-top: 210px; margin-right: 480px;">
        <img src="user.png" class="imagem"/>  
    </div>
    
    <div class="dados" style="margin-top: -100px; margin-left: 700px;">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email' WHERE Id=$id ") or die("Um erro foi encontrado");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Alterações salvas!</p>
                </div> <br>";
              echo "<a href='usuario.php'><button class='btn' style='cursor: pointer;'>Voltar</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                }

            ?>
            
            <h4 style="font-size:35px; margin-top:25px;"> Editar perfil </h4>
            <form action="" method="post">
                <div class="field input" style="margin-top:-10px; font-size:25px;">
                    <label for="username"> <h4 style="margin-bottom: 5px"> Username </h4> </label>
                    <input type="text" style="font-size:23px;" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input" style="margin-top:-10px; font-size:25px;">
                    <label for="email"> <h4 style="margin-bottom: 5px"> Email </h4> </label>
                    <input type="text" style="font-size:23px;" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>
                <br>
                <div class="field">
                    
                    <input type="submit" class="btn" style="cursor: pointer;" name="submit" value="Atualizar" required>
                </div>
                
            </form>
        </div>
        
        <?php } ?>
      </div>

      <div class="right-links" style="margin-top: 20px; margin-left: 350px; cursor: pointer;">
        <a href="#"> <button class="btn" style="cursor: pointer;"> Editar perfil </button> </a> <br> <br>
        <a href="../php/logout.php"> <button class="btn" style="cursor: pointer;">Sair da conta</button> </a>
    </div>

</body>
</html>
