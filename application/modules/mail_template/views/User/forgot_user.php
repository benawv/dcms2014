<html>
<head>
<title>Untitled Document</title>
<style type="text/css">
body, p { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-size:12px; color:#000; line-height:1.3em;}
.bold {font-weight:bold; font-size:1.2em;}
</style>
</head>

<body style="margin:0; padding:0; background:#FFF;">
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="<?php echo base_url();?>media/img/email-logo.png" width="600" height="49" border="0"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" height="250" cellspacing="0" cellpadding="10">
      <tr>
        <td valign="top"><p>Dear <span class="bold"><?php echo $user->row()->full_name;?></span>,<br>
   

 <p>Your temporary password is : <span class="bold"><?php echo urldecode($pass);?></span></p>
    <p>Please login to your account here: <a href="<?php echo base_url(); ?>"><?php echo base_url(); ?></a></p>
    <br><br>
    <p><span style="font-weight:bold; text-transform:uppercase; font-size:1.1em;"> DCMS</span><br>
(This is a computer generated email, no signature is required)<p>
    </td>
    </table>
      </td>
      </tr>
  </tr>
  <tr>
    <td style="font-size:10px; color:#333;"> </td>
  </tr>
</table>
</body>
</html>
