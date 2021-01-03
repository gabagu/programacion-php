<form class="form-signin" method="POST">
  <h4>Formulario de login</h4>
  <?php if(isset($data['success'])) { ?>
  <p><?php echo $data['success']; ?></p->
  <?php } ?>
  <div class="mb-3">
    <label for="username" class="form-label">Ingrese un nombre de usuario</label>
    <input type="text" class="form-control <?php echo isset($error['username']) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?php echo isset($username) ? $username : '' ?>">
    <?php if(isset($error['username'])) { ?>
      <div class="invalid-feedback"><p><?php echo isset($error['username']) ? $error['username'] : '' ?></p></div>
    <?php } ?>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Ingrese una contraseña</label>
    <input type="password" class="form-control <?php echo isset($error['password']) ? 'is-invalid' : '' ?>" id="password" name="password">
    <?php if(isset($error['password'])) { ?>
      <div class="invalid-feedback"><p><?php echo isset($error['password']) ? $error['password'] : '' ?></p></div>
    <?php } ?>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>