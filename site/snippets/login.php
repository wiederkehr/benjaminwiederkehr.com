<?php $login = Auth::login() ?>

<form action="<?php $page->url() ?>" method="post" class="login">

  <?php if($login): ?>
  <div class="alert">
    Invalid username or password
  </div>
  <?php endif ?>

  <div class="field text">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" />
  </div>

  <div class="field text">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" />
  </div>

  <div class="field buttons">
    <input type="submit" name="submit" value="Login" />
  </div>

</form>
