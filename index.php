
<?php
function __autoload($className){
	require_once "c/{$className}.php";
}
$info = explode('/', $_GET['q']);		


$params = array();

foreach ($info as $v)
{
	if ($v != '')
		$params[] = $v;
}
$action = 'action_';
$action .= (isset($params[1])) ? $params[1] : 'index';

switch ($params[0])
{
	case 'auth':
		$controller = new C_Auth();
		break;
	default:
		$controller = new C_Page();
}

$controller->Request($action, $params);
