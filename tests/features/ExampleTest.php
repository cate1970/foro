<?php

class ExampleTest extends FeatureTestCase
{
    
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Charlie',
            'email' => 'carlos.teran.gutierrez@gmail.com'
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see($user->name)
            ->see('carlos.teran.gutierrez@gmail.com');
    }
}
