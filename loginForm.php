<?php include "templates/include/header.php";
require('config.php');
 ?>

      <form action="admin.php" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $_GET['error'] ) ) { ?>
        <div class="errorMessage"><?php echo $_GET['error'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          </li>

          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>

        </ul>

        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>

      </form>

<?php include "templates/include/footer.php" ?>

