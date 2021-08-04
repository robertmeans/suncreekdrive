<?php require_once("_includes/session.php"); ?>
<?php require '_db/connect.php'; ?>
<?php require_once("_includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $admin_set = find_all_admins(); ?>
<?php $admin = mysqli_fetch_assoc($admin_set) ?>

<?php $layout_context = "manage-admins"; ?>
<?php include("_includes/header.php"); ?>


<div id="manage-admins-main">
  <div id="page" class="login-box w_bkg">
    <?php echo message(); ?>
    <!-- <h2 class="manage-h2">Manager</h2> -->
    <table>
      <tr>
        <th style="text-align: left; width: 200px;">Username</th>
        <th colspan="2" style="text-align: left;">Actions</th>
      </tr>
    <?php // mysqli_data_seek($admin_set,0); ?>
    <?php // while($admin = mysqli_fetch_assoc($admin_set)) { ?>
      <tr>
        <td><?php echo htmlentities($_SESSION["username"]); ?></td>
        <td><a class="admin-link" href="edit-admin.php?id=<?php echo urlencode($_SESSION["admin_id"]); ?>">Change Your Password</a>&nbsp;&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    <?php // } ?>
    </table>
    <br />
    <hr />

  </div>
</div>

<?php include("_includes/footer.php"); ?>
