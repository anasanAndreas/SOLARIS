<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>solaris | cadastro</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="shortcut icon" type="imagex/png" href="../../icon.ico">
</head>

<body>
<?php 
   session_start();
   include("../php/config.php");
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

<div class="container">
    <div class="box form-box">
    <?php 
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $dob = mysqli_real_escape_string($con, $_POST['dob']);

            $birthDate = new DateTime($dob);
            $today = new DateTime();
            $age = $today->diff($birthDate)->y;

            $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                        <p>Este email já está em uso. Tente com um novo!</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Voltar</button></a>";
            } else if ($age < 16) {
                echo "<div class='message'>
                        <p>Você deve ter pelo menos 16 anos para criar uma conta.</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Voltar</button></a>";
            } else {
                mysqli_query($con, "INSERT INTO users (Username, Email, Password, Age, dob) VALUES ('$username', '$email', '$password', '$age', '$dob')") or die("Um erro foi encontrado. Tente novamente.");

                echo "<div class='message'>
                        <p>Sua conta foi registrada com sucesso!</p>
                      </div> <br>
                      <a href='../login/login.php'><button class='btn'>Faça seu login</button></a>";
            }
        } else {
    ?>

            <div class="login"><b>Cadastro</b></div>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Nome</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="dob">Data de Nascimento</label>
                    <input type="date" name="dob" id="dob" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Criar conta" required>
                </div>
                <div class="links">
                    Já tem uma conta? <a href="../login/login.php">Faça seu login</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
