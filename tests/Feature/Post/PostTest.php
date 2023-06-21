<?php
require './vendor/autoload.php';

use App\Models\User;

it('can create a new post in blog', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->post(route('posts.store'), [
           'title' => 'test',
            'body' => 'testando esse post foda :))',
            'user_id' => $user->id,
            'slug' => fake()->slug,
        ]);

    expect($response->status())->toBe(302);
});
