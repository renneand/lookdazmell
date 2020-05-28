<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilo.css">
      <meta name="csrf-token" content="{{csrf_token()}}">
      
      <nav class="navbar navbar-light navbar-expand-md mb-4" style="background-color: #ffa8a6;">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/looks">Looks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contato">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </head>
    <body>

      <div class="sitebody">
        
        @yield('conteudo')
      </div>
    </body>

    <footer class="bd-footer text-muted container sitefooter">
      <div class="row">
        <div class="col-sm">
          <ul>
            <div> Entre em Contato!</div>
              <a href="https://www.instagram.com/lookdazmell"><img src="/img/social/insta.png" width=30 height=30></a>
              <a href="https://api.whatsapp.com/send?phone=5585984244115"><img src="/img/social/whats.svg" width=50 height=30></a>
              <a href="#"><img src="/img/social/face.svg" width=47 height=27></a>
              <a href="sobre"><img src="/img/social/sobre.svg" width=47 height=27></a>
          </ul>
        </div>
        <div class="col-sm">
          <ul>            
            <p>Look Daz Mell</p>
            <p>Pacatuba Ceará, Av. B 200, Casa 339</br>
              Telefone: (85) 9 9622-2014 </br>
              Email: rennemelo@hotmail.com</br>
            </p>

</p>
          </ul>
        </div>
      </div>  
      </footer>

</html>