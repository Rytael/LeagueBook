<?PHP
	session_start();
	$user_name = "LoLCodexData";
	$pass_word = "Israel90123!";
	$database = "LoLCodexData";
	$server = "LoLCodexData.db.10536782.hostedresource.com";
	$msg = $_POST['status_msg'];
	$poster = $_SESSION['summoner'];
	$receiver = $_GET['summoner'];

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);
	if ($db_found) {
		$SQL = "INSERT INTO newsfeed (
				receiver,
				poster,
				message,
				timestamp
				)
				VALUES ($receiver, $poster, $msg, CURRENT_TIMESTAMP);";
	}
	header ("Location: ../userhomepage/userhomepage.php?summoner=$receiver");
?>