<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateCollegeTest extends FeatureTestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
     function test_a_user_create_a_college()
    {
        $nameCollege='San Ramon';

        $this->actingAs($user=$this->defaultUser())


            ->visit(route('college.create'))
            ->type($nameCollege,'name')
            ->press('Registrar');


        $this->seeInDatabase('colleges',[
            'name'=>$nameCollege,
            'user_id'=>$user->id,
        ]);


         $this->see($nameCollege)
        ;


    }
}
