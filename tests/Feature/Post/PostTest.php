<?php
require './vendor/autoload.php';

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\assertDatabaseHas;

it('can create a new post in blog', function () {
    //Arrange
    $user = User::factory()->create();

    //Act
    $response = $this->actingAs($user)
        ->post(route('posts.store'), $data = [
           'title' => 'como fazer amigos',
            'body' => 'testando esse post foda :))',
            'user_id' => $user->id,
        ]);

    $status = $response->status();

    //Assert
    expect($status)
        ->toBe(302)
        ->and(assertDatabaseHas('posts', $data));
});
