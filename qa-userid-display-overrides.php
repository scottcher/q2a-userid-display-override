<?php

  	// override for qa-app-users.php qa_get_one_user_html() function
	//
	function qa_get_one_user_html($handle, $microformats)
	{
		$userprofiles = qa_db_select_with_pending(qa_db_user_profile_selectspec($handle,false));
		$userdisplayhandle = $handle;
		if(@$userprofiles['name'] != '') {
			$userdisplayhandle = @$userprofiles['name'];
		}
		return strlen($userdisplayhandle) ? ('<A HREF="'.qa_path_html('user/'.$handle).
			'" CLASS="qa-user-link'.($microformats ? ' url nickname' : '').
			'">'.qa_html($userdisplayhandle).'</A>') : '';
	}

/*
	Omit PHP closing tag to help avoid accidental output
*/
