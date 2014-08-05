<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Commands;

use Symfony\Component\Console\Input\InputOption;

/**
 * Runs the Cleanup task to prune deprecated releases
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 */
class CleanupCommand extends AbstractDeployCommand
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'deploy:cleanup';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Clean up old releases from the server.';

	/**
	 * Execute the tasks
	 */
	public function fire()
	{
		$this->fireTasksQueue('cleanup');
	}

	/**
	 * Get the console command options.
	 *
	 * @return string[][]
	 */
	protected function getOptions()
	{
		return array_merge(parent::getOptions(), array(
			['clean-all', null, InputOption::VALUE_NONE, 'Cleans up all non-current releases'],
		));
	}
}
