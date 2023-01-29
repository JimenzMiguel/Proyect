<!doctype html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/sign_up_view.css">
</head>

<body>
  <main class="container-fluid" id="container-login">
    <div class="row" id="row-elements">
      <div id="container-welcome" class="col-md-5">
        <h1 id="title-welcome">Welcome to Stoke</h1>
        <p id="text-welcome">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ut itaque unde, eum quibusdam assumenda
          numquam? Ad eligendi, numquam maxime quibusdam quia maiores nemo! Ratione iusto rem reiciendis eligendi earum?
        </p>
      </div>
      <div id="form" class="col-md-5">

        <div id="form-sign-up">
          <h1 class="text-center" id="title-sign-up">Sign Up</h1>
          <form action="" class="card">
            <div class="card-body" id="card-sign-up">
              <div class="form-group">
                <div class="row" id="container-sign-up">
                  <input type="text" class="form-control" placeholder="Nombres" id="input-nombre">
                  <input type="text" class="form-control" placeholder="Primer apellido" id="input-primer-apellido">
                  <input type="text" class="form-control" placeholder="Segundo apellido" id="input-segundo-apellido">
                  <input type="text" class="form-control" placeholder="Nombre de usuario" id="input-nombre-usuario">
                  <input type="email" class="form-control" placeholder="Correo Electronico" id="input-correo">
                  <input type="password" class="form-control" placeholder="Contraseña" id="input-contraseña">
                  <input type="password" class="form-control" placeholder="Confirmar contraseña"
                    id="input-confirmar-contraseña">
                  <input type="file" class="form-control" id="input-avatar">
                </div>
              </div>
              <div id="btn">
                <button class="btn btn-success" type="submit" id="boton-sign-up">Registrate</button>
              </div>
            </div>
          </form>
        </div>
        <div id="option-form">
          <span class="text-center" id="link-sign-in">¡ Ya Tengo Cuenta ! <a href="../index.php">Iniciar Sesion</a></span>
        </div>
      </div>
    </div>
  </main>
 /* Una biblioteca que nos permite usar jQuery. */
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>