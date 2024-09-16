<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["AfterLogout"]=true;

		$this->events["BeforeShowMenu"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		header("Location: equipos_list.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.

;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		
header("Location: login.php");
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowMenu(&$xt, &$templatefile, $pageObject)
{

		
header("Location: equipos_list.php");
exit();
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowMenu

		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
