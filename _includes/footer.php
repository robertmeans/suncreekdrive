<?php
  function ewd_copyright($startYear) {
    $currentYear = date('Y');
    if ($startYear < $currentYear) {
      $currentYear = date('y');
      return "&copy; $startYear&ndash;$currentYear";
    } else {
        return "&copy; $startYear";
    }
  }
?>

<footer>

  <button id="toggle-contact-form"><i class="fa fa-star" aria-hidden="true"></i><span class="tiny-mobile">&nbsp;&nbsp;</span> comments | questions | suggestions <span class="tiny-mobile">&nbsp;&nbsp;</span><i class="fa fa-star" aria-hidden="true"></i></button>

  <div id="email-bob">
    <p class="form-note">You look nice today. <i class="far fa-smile"></i></p>

    <form id="contactForm">
    <ul>
      <li>
        <label class="text" for="name">Name</label>
        <input name="name" type="text" id="sendersname" maxlength="60">
      </li>
      <li>
        <label class="text" for="email" required>Email</label>
        <input name="email" type="email" id="email" maxlength="60">
      </li>
      <li>
        <label class="text" for="comments">Message</label>
        <textarea name="comments" id="comments" maxlength="2000"></textarea>
      </li>
      <li>
        <div id="msg"></div>
      </li>
      <li class="send-items">
        <input id="emailBob" value="Send">
      </li>
    </ul> 
    </form>

  </div>

	<p class="copyright"><?= ewd_copyright(2016); ?> Neighborly neighborhood neighbor Bob</p> 
</footer>
<!-- </div> --><!-- #body-wrap -->
<script src="js/scripts.js?<?php echo time(); ?>"></script>

<?php if (WWW_ROOT == 'http://localhost/suncreekdrive') { ?>
<script src="http://localhost:35729/livereload.js"></script>
<?php } ?>

</body>
</html>

<?php 
	if (isset($connection)) {
		mysqli_close($connection); 
	}
?>