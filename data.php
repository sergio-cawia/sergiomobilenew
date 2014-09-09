<?

if ( $_GET[ "job" ] == "header" )
{
	print "This is the header test";
	exit;	
}

if ( $_GET[ "job" ] == "main" )
{
	print "This is the main content.";
	exit;	
}

if ( $_GET[ "job" ] == "replacemain" )
{
	print "This is the replacement main content.This is the replacement main content.This is the replacement main content.This is the replacement main content.This is the replacement main content.This is the replacement main content.This is the replacement main content.HELLO.";
	exit;	
}

if ( $_GET[ "job" ] == "footer" )
{
	print "<button onclick='replacemain()' data-theme='a'>Press me</button><br><button onclick='replacemain()' data-theme='a'>Clear</button>This is the footer.";
	exit;	
}




?>