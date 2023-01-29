$(document).ready(function () {
  $("#formulario-registro").submit(function (e) {
    const User = {
      name_user: $("#input-nombre").val(),
      firts_lastname_user: $("#input-primer-apellido").val(),
      second_lastname_user: $("#input-segundo-apellido").val(),
      username_user: $("#input-nombre-usuario").val(),
      email_user: $("#input-correo").val(),
      password_user: $("#input-contraseña").val(),
      confirm_password_user: $("#input-confirmar-contraseña").val(),
    };

    if (
      User.name_user === "" ||
      User.firts_lastname_user === "" ||
      User.second_lastname_user === "" ||
      User.username_user === "" ||
      User.email_user === "" ||
      User.password_user === "" ||
      User.confirm_password_user === ""
    ) {
      alert("No se pueden enviar campos vacios");
    } else if (User.password_user == User.confirm_password_user) {
      $.post("../controllers/sign-up.php", User, function (response) {
        console.log(response);
      });
    } else {
      alert("las contraseñas no coinciden");
    }
    console.log(User);

    e.preventDefault();
  });
});
