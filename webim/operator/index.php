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

$operator = check_login();
loadsettings();

$page = array(
	'version' => $version,
	'localeLinks' => get_locale_links("$webimroot/operator/index.php"),
	'needUpdate' => $settings['dbversion'] != $dbversion,
	'updateWizard' => "$webimroot/install/",
);

prepare_menu($operator);
start_html_output();
require('../view/menu.php');
?>