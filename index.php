<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Status</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/sticky-footer.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.square {
  width: 175px;
  height: 175px;
  border: 0px;
  display: inline-block;
  margin-right: 10px;
  margin-top: 10px;
}
.online {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: green;
  color: white;
}
.offline {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: darkred;
  color: white;
}
</style>

  </head>

  <body background="background.png">

    <!-- Edit the information below with your server names, ip's, server admin panels etc. -->

    <!-- Begin page content -->
    <div class="container" align="center">
      <div class="page-header">
        <div align="center"><h1 style="color:white;">Server Status</h1></div>
      </div>

        <div class="square" style="background: white;">
    		 <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
    		  <strong>Name:</strong> EdgeRouter<br />
    		  <strong>IP:</strong> 192.168.1.1<br />
    		  <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.1',80); ?><br />
    		  <strong>Access:</strong> <a href="https://192.168.1.1" target="_new">Admin</a>
    		 </div>
    		</div>

    		<div class="square" style="background: white;">
    		 <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
    			<strong>Name:</strong> WiFi<br />
    			<strong>IP:</strong> 192.168.1.2<br />
    			<strong>Status:</strong> <?php echo GetServerStatus('192.168.1.2',80); ?><br />
    			<strong>Access:</strong> <a href="https://192.168.1.2" target="_new">Admin</a>
    		 </div>
    		</div>

    		<div class="square" style="background: white;">
    		 <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
    			<strong>Name:</strong> Main Server<br />
    			<strong>IP:</strong> 192.168.1.3<br />
    			<strong>Status:</strong> <?php echo GetServerStatus('192.168.1.3',80); ?><br />
    			<strong>Access:</strong> <a href="https://192.168.1.3" target="_new">Admin</a>
    		 </div>
    		</div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> Ubiquiti AP<br />
          <strong>IP:</strong> 192.168.1.4<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.10',8443); ?><br />
          <strong>Access:</strong> <a href="https://192.168.1.10:8443" target="_new">Admin</a>
         </div>
        </div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> WDRed NAS<br />
          <strong>IP:</strong> 192.168.1.5<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.5',80); ?><br />
          <strong>Access:</strong> <a href="https://192.168.1.5" target="_new">Admin</a>
         </div>
        </div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> ReadyHGST<br />
          <strong>IP:</strong> 192.168.1.6<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.6',80); ?><br />
          <strong>Access:</strong> <a href="https://192.168.1.6" target="_new">Admin</a>
         </div>
        </div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> WDGreen NAS<br />
          <strong>IP:</strong> 192.168.1.7<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.7',80); ?><br />
          <strong>Access:</strong> <a href="https://192.168.1.7" target="_new">Admin</a>
         </div>
        </div>

    		<div class="square" style="background: white;">
    		 <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
    			<strong>Name:</strong> Alouette<br />
    			<strong>IP:</strong> 192.168.1.10<br />
    			<strong>Status:</strong> <?php echo GetServerStatus('192.168.1.10',80); ?><br />
    			<strong>Access:</strong> <a href="https://192.168.1.10:10000" target="_new">Webmin</a>
    		 </div>
    		</div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> Cloverdale<br />
          <strong>IP:</strong> 192.168.1.20<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.20',80); ?><br />
          <strong>Access:</strong> <a href="192.168.1.20" target="_new">Admin</a>
         </div>
        </div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> Dewdney<br />
          <strong>IP:</strong> 192.168.1.30<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.30',80); ?><br />
          <strong>Access:</strong> <a href="192.168.1.30" target="_new">Admin</a>
         </div>
        </div>

        <div class="square" style="background: white;">
         <div style="float: left; margin: 14px; text-align: left; line-height: 35px;">
          <strong>Name:</strong> Lorex DVR<br />
          <strong>IP:</strong> 192.168.1.55<br />
          <strong>Status:</strong> <?php echo GetServerStatus('192.168.1.55',80); ?><br />
          <strong>Access:</strong> <a href="192.168.1.55" target="_new">Admin</a>
         </div>
        </div>


    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <?php
 function GetServerStatus($site, $port)
 {
 $status = array("<div class='online'>Online</div>", "<div class='offline'>Offline</div>");
 $fp = @fsockopen($site, $port, $errno, $errstr, 2);
 if (!$fp) {
		return $status[1];
	} else  { return $status[0];}
 }
?>
</html>
