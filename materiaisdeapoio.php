<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>solaris | materiais de apoio</title>

<link rel="stylesheet" type="text/css" href="materiais/materiaisdeapoio.css">
<link rel="shortcut icon" type="imagex/png" href="icon.ico">
</head>

<body>

<?php 
    session_start();
    if (!isset($_SESSION['valid'])) {
        echo "<script>
            alert('Você precisa criar uma conta para acessar esta página.');
            window.location.href = 'conta/login/login.php';
          </script>";
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
      <img src="index/logo_s.png" style="width: 200px;" alt="Nome do site: Solaris">
    </div>
    
<nav>
    <div class="menu">
      <a href="index.html">Início</a>
      <a href="nossojogo.html">Jogos</a>
      <a href="materiaisdeapoio.php">Materiais de apoio</a>
      <a href="sobrenos.html">Sobre nós</a>
      <button><a href="conta/login/login.php"><img src="index/user.png" style="height: 30px; padding: 1px;" alt="Botão para acessar login"></button></a>
    </div>
</nav>
</header>

<img src="nossojogo/mascote2.png" style="position: absolute; width: 620px;  margin-top: 100px; margin-left: 0px;" alt="Solis (mascote sol) utilizando um computador">
<h2 style="position: absolute; margin-left: 960px; margin-top: 90px;"> Materiais de Apoio </h2>

<p style="position: absolute; margin-right: 110px; margin-left: 670px; margin-top: 200px; font-size: 30px; color: white; text-align: justify; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; line-height: 50px;">
  Nossos materiais de apoio têm como intuito auxiliar tanto pedagogos e profissionais da área quanto responsáveis 
  no progresso da educação e no desenvolvimento cognitivo das crianças neurodivergentes.
  <br><br>
  Neles encontram-se atividades que ajudam a coordenação motora, o reconhecimento dos sentimentos, a resolução de 
  problemas, o raciocínio logico, além do planejamento de rotinas e controle inibitório.
</p>

<div style="margin-top: 750px;">

<section class="secao4" id="sobre">
<div class="secao4-div">
     
<div class="secao4-div-card">
    <img decoding="async" src="materiais/conecte.png" alt="imagem da atividade Conecte as Formas">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Conecte as Formas</h3>
    <br>
    <a href="materiais/Conecte as formas.pdf" class="btn btn-primary">baixar</a>
</div>

<div class="secao4-div-card">
    <img decoding="async" src="materiais/pareamento.png" alt="imagem da atividade Pareamento">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Pareamento</h3>
    <br>
    <a href="materiais/Pareamento.pdf" class="btn btn-primary">baixar</a>
</div>

<div class="secao4-div-card">
    <img decoding="async" src="materiais/lógica.png" alt="imagem da atividade SequênciaL Lógica">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Sequência Lógica</h3>
    <br>
    <a href="materiais/Sequência Lógica.pdf" class="btn btn-primary">baixar</a>
</div>

<div class="secao4-div-card">
    <img decoding="async" src="materiais/alinhavos.png" alt="imagem da atividade Alinhavos">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Alinhavos</h3>
    <br>
    <a href="materiais/Alinhavos.pdf" class="btn btn-primary">baixar</a>
</div>

<div class="secao4-div-card">
    <img decoding="async" src="materiais/rastreio.png" alt="imagem da atividade Rastreio Visual">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Rastreio Visual</h3>
    <br>
    <a href="materiais/Rastreio visual.pdf" class="btn btn-primary">baixar</a>
</div>

<div class="secao4-div-card">
    <img decoding="async" src="materiais/emoções.png" alt="imagem da atividade Reconhecimento de Emoções">
    <h3 style="font-size: 1.5em; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; color: rgb(58, 132, 230); margin-bottom: 0px;">Reconhecimento de Emoções</h3>
    <br>
    <a href="materiais/Reconhecimento de emoções.pdf" class="btn btn-primary">baixar</a>
   </div>
</div>
</section>

<div style="margin-top: 150px;"> </div>

<footer>
<div class="footer-container">
    <div class="logo-section">
      <div class="logo-item">
          <img src="index/venus.png" style="width: 80px; height: 80px; margin-bottom: 10px; transition: transform 0.3s;"alt="logo venus">
          <br>
          <p>© 2024 Venus, todos os direitos reservados</p>
 </div>
  
<div class="footer-content">
    <ul class="social-icons">
        <li><a href="https://www.instagram.com/tcc_venus/"><img src="rodape/insta.png" alt="ícone do instagram"></a></li>
        <li><a href="https://www.youtube.com/@tcc_venus"><img src="rodape/yt.png" alt="ícone do youtube"></a></li>
        <li><a href="#"><img src="rodape/x.png" alt="ícone do twitter"></a></li>
    </ul>
    <p style="margin-top: 40px; font-size: 25px; color: #fff; font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px; text-align: center;"> Contate-nos </p>
</div>
  
<div class="logo-item">
          <img src="index/logo_s.png" style="width: 200px; height: auto; margin-bottom: 10px; transition: transform 0.3s;" alt="logo solaris">
          <br>
          <div class="link-bar">
            <a href="termos.html">Termos de Uso</a>
            <span class="divider" style="margin: 0 10px; font-size: 16px; color: #fff;">|</span>
            <a href="priv.html">Política de Privacidade</a>
        </div>
</div>
</footer>

</body>
</html>
