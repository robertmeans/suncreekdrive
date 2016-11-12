<footer class="cf">
	<p>report website problems <a class="footer-link" href="mailto:robert@evergreenwebdesign.com?subject=Sun Creek Drive Website Issue">here</a></p>
	<p class="copyright">&copy;<?php echo date("Y"); ?> <!-- <a target="_blank" href="http://www.evergreenwebdesign.com">Evergreen Web Design</a> -->Neighborly neighborhood neighbor Bob</p>
</footer>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>

<?php 
	if (isset($connection)) {
		mysqli_close($connection); 
	}
?>