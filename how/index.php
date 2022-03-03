<?php	
include('header.php');
?>
<title>phpzag.com : Demo How To Scrape Data From Website Using PHP</title>
<?php include('container.php');?>
<div class="container">
	<h2>How To Scrape Data From Website Using PHP</h2>
	<br>
	<br>	
	<form method="post" name="scrap_form" id="scrap_form" action="">   
    <label>Enter Website URL To Scrape Data</label>
	<br>	
    <input type="input" name="website_url" id="website_url" value="<?php if(isset($_POST['website_url'])) { echo $_POST['website_url']; } ?>" > 
	<input type="submit" name="submit" value="Submit" >    	
	</form>
	
	<?php	
	include('function.php');
	if(isset($_POST['submit']) && $_POST['website_url']){
		$html = scrapWebsite($_POST['website_url']);	
		$postDetail = getPostDetails($html);	
		
		echo "<br><pre>";
		print_r($postDetail);
		echo "</pre>";
		
		//writeToCSV($postDetail);
	} 
	?>
	<br>		
</div>
<?php include('footer.php');?>
