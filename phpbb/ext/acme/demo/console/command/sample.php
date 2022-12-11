<?php
/**
 *
 * Acme Demo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, houssem
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace acme\demo\console\command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Acme Demo console command.
 */
class sample extends \phpbb\console\command\command
{
	/** @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\user $user User instance (mostly for translation)
	 */
	public function __construct(\phpbb\user $user)
	{
		parent::__construct($user);

		// Set up additional properties here
	}

	/**
	 * Configures the current command.
	 */
	protected function configure()
	{
		$this->user->add_lang_ext('acme/demo', 'cli');
		$this
			->setName('acme:demo')
			->setDescription($this->user->lang('CLI_DEMO'))
		;
	}

	/**
	 * Executes the command acme:demo.
	 *
	 * @param InputInterface  $input  An InputInterface instance
	 * @param OutputInterface $output An OutputInterface instance
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln($this->user->lang('CLI_DEMO_HELLO'));
	}
}
