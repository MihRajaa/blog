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

class install_cron extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['demo_cron_last_run']);
	}

	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	public function update_data()
	{
		return [
			['config.add', ['demo_cron_last_run', 0, true]],
		];
	}
}
