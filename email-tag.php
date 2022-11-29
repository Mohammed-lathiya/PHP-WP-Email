<?php

$get_custom_meta = get_user_meta($user_id, 'get_custom_meta', true);

$variables = array(
	'door_key' => $get_custom_meta
);

$email_content = preg_replace_callback('/{([a-zA-Z0-9\_\-]*?)}/i',
	function($match) use ($variables) { 
		return  $variables[$match[1]]; 
}, $prepare_door_key_email_content );

?>
