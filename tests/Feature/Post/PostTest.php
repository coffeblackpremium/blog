<?php
require './vendor/autoload.php';

use App\Events\NewPostCreatedEvent;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Inertia\Testing\AssertableInertia as Assert;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;

it('should be have a component to create posts', function () {
    $this->actingAs(User::factory()->create())
    ->get(route('posts.create'))
    ->assertOk()
    ->assertInertia(fn(Assert $page) => $page
        ->component('Post/Create')
    );
});

it('should be create a new post in blog', function () {
    //Arrange
    $user = User::factory()->create();

    //Act
    $response = $this->actingAs($user)
        ->post(route('posts.store'), $data = [
            'title' => $title = fake()->sentence(3),
            'body' => fake()->paragraph,
            'image' => $image = fake()->image
        ]);

    //Assert
    expect($response->status())
        ->toBe(302)
        ->and(assertDatabaseHas('posts', [
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $data['image'],
            'slug' => Str::slug($title),
            'user_id' => $user->id
        ]));
});

//it('guests can not create new post')
//    ->get(route('posts.create'))
//    ->assertForbidden();
