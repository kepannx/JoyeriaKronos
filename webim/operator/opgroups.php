<?php
/*
 * This file is part of Mibew Messenger project.
 *
 * Copyright (c) 2005-2009 Mibew Messenger Community
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Evgeny Gryaznov - initial API and implementation
 */

require_once('../libs/common.php');
require_once('../libs/operator.php');
require_once('../libs/operator_settings.php');

$operator = check_login();

function update_operator_groups($operatorid,$newvalue) {
	$link = connect();
	perform_query("delete from chatgroupoperator where operatorid = $operatorid", $link);
	foreach($newvalue as $groupid) {
		perform_query("insert into chatgroupoperator (groupid, operatorid) values ($groupid,$operatorid)", $link);
	}
	mysql_close($link);
}

$opId = verifyparam( "op","/^\d{1,9}$/");
$page = array('opid' => $opId);
$page['groups'] = get_groups(false);
$errors = array();

$canmodify = ($opId == $operator['operatorid'] && is_capable($can_modifyprofile, $operator)) 
				|| is_capable($can_administrate, $operator);

$op = operator_by_id($opId);

if( !$op ) {
	$errors[] = getlocal("no_such_operator");

} else if( isset($_POST['op']) ) {

	if(!$canmodify) {
		$errors[] = getlocal('page_agent.cannot_modify');
	}

	if(count($errors) == 0) {
		$new_groups = array();
		foreach($page['groups'] as $group) {
			if( verifyparam("group".$group['groupid'],"/^on$/", "") == "on") {
				$new_groups[] = $group['groupid'];
			}
		}
		
		update_operator_groups($op['operatorid'],$new_groups);
		header("Location: $webimroot/operator/opgroups.php?op=$opId&stored");
		exit;
	}
}

$page['formgroup'] = array();
$page['currentop'] = $op ? topage(get_operator_name($op))." (".$op['vclogin'].")" : "-not found-";
$page['canmodify'] = $canmodify ? "1" : "";

if($op) {
	foreach(get_operator_groupids($opId) as $rel) {
		$page['formgroup'][] = $rel['groupid'];
	}
}

$page['stored'] = isset($_GET['stored']);
prepare_menu($operator);
setup_operator_settings_tabs($opId,2);
start_html_output();
require('../view/operator_groups.php');
?>