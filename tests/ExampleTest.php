<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    Use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user=factory(\App\User::class)->create([
            'name'=>'Kevin Puscan',
            'email'=>'admin@gmail.com',
        ]);


        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Kevin Puscan')
            ->see('Admin@gmail.com')

        ;
    }
}
