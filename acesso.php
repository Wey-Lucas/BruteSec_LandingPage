<html lang="pt">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="icon" href="https://brutesec.com/favicon.ico" type="image/x-icon"/>
   <title>BruteSec - Web Application Firewall</title>
   <noscript>
  <meta http-equiv="refresh" content="0;denied.php">
   </noscript>

<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link href="css/offcanvas.css" rel="stylesheet">
<link href="css/hs.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5Y41CXXGJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5Y41CXXGJQ');
</script>

    <script src="https://www.google.com/recaptcha/api.js?render=6Lfd5YAUAAAAAFNzYvCNkopkJvpnPcaCkP-ggoAI"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lfd5YAUAAAAAFNzYvCNkopkJvpnPcaCkP-ggoAI', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#pageload").fadeIn(1000);
});
</script>

</head>
<body>

<div id="pageload" style="display: none;">

<div class="jumbvideo jumbvideo-fluid">
  <video autoplay muted loop>    
    <source src="https://hackersec.com/wp-content/uploads/2020/06/video_aluno_acessa.mp4" type="video/mp4">
  </video>

<div class="container">
  <br>
  <br>
  <br>
  <br>
    <form class="form-signin" action="" method="POST">
      <div class="text-center">
        <a href="index.php"><img src="img/logo-brutesec.png" target="blank" alt="Image" class="block-center" width="100%"></a>
      </div>
      <br>
        <div class="form-label-group">
          <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required>
          <label for="inputEmail">E-mail</label>
        </div>
        <div class="form-label-group">
          <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
          <label for="inputPassword">Senha</label>
        </div>
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      <label class="text-white-50"><a href="forget" class="text-white-50">Esqueci minha senha</a></label>
      <br>
      <br>
      <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Entrar</button>
      <br>
    </form>

</div>
</div>

<footer>
    <p>© HackerSec. Todos direitos reservados.</p>
    <br>
</footer>

</body>
</html>