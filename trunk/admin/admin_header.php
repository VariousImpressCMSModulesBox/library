<?php
/**
 * Admin header file
 *
 * This file is included in all pages of the admin side and being so, it proceeds to a few
 * common things.
 *
 * @copyright	GPL 2.0 or later
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Madfish <simon@isengard.biz>
 * @package		library
 * @version		$Id$
 */

include_once '../../../include/cp_header.php';

include_once ICMS_ROOT_PATH . '/modules/' . basename(dirname(dirname(__FILE__)))
	. '/include/common.php';
if (!defined("LIBRARY_ADMIN_URL")) define('LIBRARY_ADMIN_URL', LIBRARY_URL . "admin/");
include_once(LIBRARY_ROOT_PATH . 'include/requirements.php');