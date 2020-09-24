<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
// use Intervention\Image\ImageManager;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($profile, array $input)
    {
        Validator::make($input, [
            'description' => ['nullable', 'string', 'max:255'],
            'URL'=> ['nullable', 'url', 'max:255'],
        ])->validate;

    }
}
