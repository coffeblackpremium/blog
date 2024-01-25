<?php
use Inertia\Testing\AssertableInertia as Assert;


it('should return main page component', function () {
    //Act
    \Pest\Laravel\get(route('blog.index'))
        ->assertInertia(fn(Assert $page) => $page
            ->component('Blog/Index'))
        ->assertOk();
});
