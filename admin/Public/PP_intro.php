<?php
include_once ("../lib/admin.defines.php");
include_once ("../lib/admin.module.access.php");
include_once ("../lib/admin.smarty.php");

if($A2B->config["dashboard"]["dashboard_enabled"] && has_rights (ACX_DASHBOARD)){
	Header ("Location: dashboard.php");	 
}

if (!$ACXACCESS) { 
	Header ("HTTP/1.0 401 Unauthorized");
	Header ("Location: PP_error.php?c=accessdenied");	   
	die();	   
}

$smarty->display('main.tpl');
?>
<br/><br/>

<table align="center" width="90%" bgcolor="white" cellpadding="5" cellspacing="5" style="border-bottom: medium dotted #AA0000">
	<tr>
		<td width="340">
			<img src="<?php echo Images_Path;?>/logoA2B-white-300.gif">
			<center>A2Billing is licensed under AGPL.</center>
			<br><br>
		</td>
		<td align="left"> <?php  echo ''; ?>
		For information and documentation on A2Billing, <br> please visit <a href="http://www.a2billing.org" target="_blank">A2Billing.org</a><br><br>
		
		For Commercial Installations, Hosted Systems, Customisation and Commercial support, please email <a href="mailto:info@asterisk2billing.org">info@asterisk2billing.org</a><br><br>
		
		<center>
		<?php echo '<a href="http://www.call-labs.com/" target="_blank"><img src="'.Images_Path.'/call-labs.com.png" alt="call-labs"/></a>'; ?>
		</center>
		For VoIP termination, please visit <a href="http://www.call-labs.com" target="_blank">http://www.call-labs.com</a> <br>
		Profits from Call-Labs are used to support the A2Billing project.<br><br>
		
		</td>
	</tr>
</table>

<br>
	
<table align=center width="90%" bgcolor="white" cellpadding="5" cellspacing="5">
	<tr>
		<td align="center"> 
		
		<center>
			<?php echo gettext("If you find A2Billing useful, please donate to the A2Billing project by clicking the Donate button :");?>  
			
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="country" value="USA">
				<input type="hidden" name="hosted_button_id" value="3769548">
				<input type="image" src="https://www.paypal.com/en_US/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Make Donation with PayPal">
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
						
		</center>
			 <br>
		<span class="liens">
	           BY USING THIS SOFTWARE, YOU ASSUME ALL RISKS OF USE AND NO WARRANTIES EXPRESS OR IMPLIED  <BR>
			   ARE PROVIDED WITH THIS SOFTWARE INCLUDING FITNESS FOR A PARTICULAR PURPOSE AND MERCHANTABILITY.
		</span> 		</td>
	</tr>
</table>
	

<?php

$smarty->display('footer.tpl');

