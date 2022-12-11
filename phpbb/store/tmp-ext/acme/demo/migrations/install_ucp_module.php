<?php
/**
 *
 * Acme Demo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, houssem
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace acme\demo\migrations;

class install_ucp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'ucp'
				AND module_langname = 'UCP_DEMO_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id !== false;
	}

	public static function depends_on()
	{
		return ['\acme\demo\migrations\install_sample_schema'];
	}

	public function update_data()
	{
		return [
			['module.add', [
				'ucp',
				0,
				'UCP_DEMO_TITLE'
			]],
			['module.add', [
				'ucp',
				'UCP_DEMO_TITLE',
				[
					'module_basename'	=> '\acme\demo\ucp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
