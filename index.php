<?php
	/*
	
	“No amount of experimentation can ever prove me right; a single experiment can prove me wrong.” - Einstein
	
	Let's download  AMPPS. Google 'Ampps' and you'll find a software stack from softaculous that allows you to use server side languages, set up databases, and develop your websites using open source software. Wow! 
	
	1. Start Apache and MySQL from the Control Center....
	2. In the browser, visit localhost/ampps/
	3. Add Domain
	4. Try php.dev
	
	Alright, now we have the folder set up. Let's add this file to the correct foler. 
	
	5. Finder, Applications, Ampps, www....
	6. Now check for php.dev.... Add it if it's not there....
	7. Delete everything in and around that folder....
	8. Add this file as index.php!
	
	Now go back to the browser and visit php.dev!
	
		function greet(){
		echo 'Hello World';
		}
		
	function greet($name){
		echo 'Hello '. $name;
		}
		
	function greet($greeting, $name='McGee'){
		echo alpha2($greeting.'  '.$name);
		}
		
	 greet('Whats Up', 'McGee');
	 */
	 
	 $num = 4815162342;
	 
	 if($num != 10) {
	 	echo 'Correct';
	 	}
?>