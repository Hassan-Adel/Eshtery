
<?php
if(isset($_POST['logout'])){
	session_unset();
	
	
	echo "
            <script type=\"text/javascript\">
window.location = 'Home_Page.php';
</script>
        ";
	
}
?>
