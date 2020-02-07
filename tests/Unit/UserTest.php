<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase

class UserTest extends TestCase
{
	use RefreshDatabase;

  	public function test_a_user_has_projects()
  	{
  		factory('App\User')->create();

  		$this->assertInstanceOf(Collection::class, $user->projects);
  	}
}
