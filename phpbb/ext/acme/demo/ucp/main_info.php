<?php
/**
 *
 * Acme Demo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, houssem
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace acme\demo\ucp;

/**
 * Acme Demo UCP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\acme\demo\ucp\main_module',
			'title'		=> 'UCP_DEMO_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'UCP_DEMO',
					'auth'	=> 'ext_acme/demo && acl_u_new_acme_demo',
					'cat'	=> ['UCP_DEMO_TITLE'],
				],
			],
		];
	}
}
