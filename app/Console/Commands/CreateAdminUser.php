<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Prompts\PasswordPrompt;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class CreateAdminUser extends Command
{
    protected $signature = 'agl:create-admin';

    protected $description = 'Create the initial AGL administrator account';

    public function handle(): int
    {
        $name = text(
            label: 'Administrator name',
            required: 'Please enter a name.'
        );

        $email = text(
            label: 'Administrator email',
            required: 'Please enter an email address.',
            validate: fn (string $value) => Validator::make(
                ['email' => $value],
                ['email' => ['required', 'email', 'max:254', 'unique:users,email']]
            )->errors()->first('email')
        );

        $password = password(
            label: 'Administrator password (minimum 12 characters)',
            validate: fn (string $value) => strlen($value) < 12
                ? 'Password must contain at least 12 characters.'
                : null
        );

        $confirmation = password(
            label: 'Confirm administrator password'
        );

        if (! hash_equals($password, $confirmation)) {
            $this->components->error('Passwords do not match. No account was created.');

            return self::FAILURE;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->components->info('Administrator account created successfully.');

        return self::SUCCESS;
    }
}
