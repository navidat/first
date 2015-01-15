<?php
include('config.php');
//include('create.php');

if($_POST)
{//autocomplete                     or email like '%$q%'
	$q=$_POST['search'];
	$sql_res=mysql_query("select id,word from ajax_words where word like '%$q%'  order by id LIMIT 5");
	

	while($row=mysql_fetch_array($sql_res))
	{
		$username=$row['word'];
		//$email=$row['email'];
		$b_username='<strong>'.$q.'</strong>';
	//	$b_email='<strong>'.$q.'</strong>';
		$final_username = str_ireplace($q, $b_username, $username);
	//	$final_email = str_ireplace($q, $b_email, $email);
		?>
		<div class="show" align="left">
			<?php /*?><img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><?php */?>
            <span class="name">
            <?php echo $final_username; ?>
            </span>
            &nbsp;
            <br/>
           <?php //  echo $final_email; ?>
            <br/>
		</div>
		<?php
	}
}
?>
