<?php

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

test('the seeder creates the only administrator, verified, with the initial password', function () {
    User::factory()->create(['email' => 'oud@example.com']);

    $this->seed(UserSeeder::class);

    $admin = User::query()->sole();

    expect($admin->email)->toBe('info@arsus.nl')
        ->and(Hash::check('admin1234', $admin->password))->toBeTrue()
        ->and($admin->hasVerifiedEmail())->toBeTrue();
});

test('the administrator can sign in and change their password', function () {
    $this->seed(UserSeeder::class);

    $this->post(route('login.store'), ['email' => 'info@arsus.nl', 'password' => 'admin1234'])
        ->assertRedirect(route('dashboard'));

    $this->actingAs(User::query()->sole())
        ->withSession(['auth.password_confirmed_at' => time()])
        ->put(route('user-password.update'), [
            'current_password' => 'admin1234',
            'password' => 'een-nieuw-wachtwoord-9',
            'password_confirmation' => 'een-nieuw-wachtwoord-9',
        ])
        ->assertSessionHasNoErrors();

    expect(Hash::check('een-nieuw-wachtwoord-9', User::query()->sole()->password))->toBeTrue();
});
