<div class="footer">
</div>
</body>
<?php wp_footer() ?>
<script>
	function showHideMenu() {
		//Navigation hidden
		if(document.getElementById('navbar').className.indexOf('in') == -1) {
			document.getElementById('navbar').className = 'navbar-collapse collapse in';
		}  else {
			//Show navigation
			document.getElementById('navbar').className = 'navbar-collapse collapse';
		}
	}
</script>
</html>