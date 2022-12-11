<?php
/**
 *
 * Acme Demo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, houssem
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace acme\demo\mcp;

/**
 * Acme Demo MCP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\acme\demo\mcp\main_module',
			'title'		=> 'MCP_DEMO_TITLE',
			'modes'		=> [
				'front'	=> [
					'title'	=> 'MCP_DEMO',
					'auth'	=> 'ext_acme/demo && acl_m_new_acme_demo',
					'cat'	=> ['MCP_DEMO_TITLE'],
				],
			],
		];
	}
}
