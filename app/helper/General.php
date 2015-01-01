class General{
	
	public static function active(){

	$uri = $_SERVER['REQUEST_URI'];

	if( (substr($uri,0,8) === '/biology') || 
	substr($uri,0,10) === '/chemistry') || substr($uri,0,8) === '/physics') || 
	substr($uri,0,8) === '/english') || substr($uri,0,10) === '/knowledge') || ){

	echo 'active';
}
}

}