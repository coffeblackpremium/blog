<?php
require './vendor/autoload.php';

use App\Events\NewPostCreatedEvent;
use App\Models\Post;
use App\Models\User;
use function Pest\Laravel\assertDatabaseHas;

it('can create a new post in blog', function () {
    //Arrange
    $user = User::factory()->create();

    //Act
    $response = $this->actingAs($user)
        ->post(route('posts.store'), $data = [
            'title' => fake()->sentence(6),
            'body' => fake()->paragraph,
            'user_id' => $user->id,
        ]);

    //Assert
    expect($response->status())
        ->toBe(302)
        ->and(assertDatabaseHas('posts', $data));
});
