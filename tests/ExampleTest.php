<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Francisco A. Aponte R.',
            'email' => 'faar2002@gmail.com',
        ]);
        
        $this->actingAs($user,'api');        
        
        $this->visit('api/user')
             ->see('Francisco A. Aponte R.')
             ->see('faar2002@gmail.com');
    }
}
