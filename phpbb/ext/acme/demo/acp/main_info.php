<?php
/**
 *
 * Acme Demo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, houssem
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace acme\demo\acp;

/**
 * Acme Demo ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\acme\demo\acp\main_module',
			'title'		=> 'ACP_DEMO_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_DEMO',
					'auth'	=> 'ext_acme/demo && acl_a_new_acme_demo',
					'cat'	=> ['ACP_DEMO_TITLE'],
				],
			],
		];
	}
}
