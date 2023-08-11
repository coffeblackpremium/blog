<?php
require './vendor/autoload.php';

use App\Events\NewPostCreatedEvent;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use function Pest\Laravel\assertDatabaseHas;

it('can create a new post in blog', function () {
    //Arrange
    $user = User::factory()->create();

    //Act
    $response = $this->actingAs($user)
        ->post(route('posts.store'), $data = [
            'title' => $title = fake()->sentence(6),
            'body' => fake()->paragraph,
        ]);

    //Assert
    expect($response->status())
        ->toBe(302)
        ->and(assertDatabaseHas('posts', [
            ...$data,
            'slug' => Str::slug($title),
            'user_id' => $user->id,
        ]));
});
