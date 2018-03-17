<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp()
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    /**
     * Helper method for signing in an active user.
     *
     * If you do not pass in an existing User instance, the
     * method will create a new one for you.
     *
     * @param null $user
     * @return \Tests\TestCase
     */
    protected function signIn($user = null)
    {
        $user = $user ? : create(User::class);

        $this->actingAs($user);

        return $this;
    }
}
