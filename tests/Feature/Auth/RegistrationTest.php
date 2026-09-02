<?php

use App\Enums\PaintingListType;
use App\Models\User;
use Laravel\Fortify\Features;

beforeEach(function () {
    $this->skipUnlessFortifyHas(Features::registration());
});

test('registration screen can be rendered', function () {
    $response = $this->get(route('register'));

    $response->assertOk();
});

test('new users can register', function () {
    $response = $this->post(route('register.store'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('registration creates painting list records for new user', function () {
    $userEmail = 'test@example.com';

    $response = $this->post(route('register.store'), [
        'name' => 'Test User',
        'email' => $userEmail,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $this->assertAuthenticated();

    $userId = User::where('email', $userEmail)->get()->firstOrFail()->id;

    foreach (PaintingListType::cases() as $paintingListType) {
        $this->assertDatabaseHas('painting_lists', [
            'user_id' => $userId,
            'type' => $paintingListType,
        ]);
    }
});
