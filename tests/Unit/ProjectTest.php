<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{

	use RefreshDatabase;

	public function test_it_has_a_path() 
	{
		$project = factory('App\Project')->create();

		$this->assertEquals('/projects/'. $project->id, $project->path());
	}
}