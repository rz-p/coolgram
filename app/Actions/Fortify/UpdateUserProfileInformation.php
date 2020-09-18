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
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'image'],
            // 'description' => ['nullable', 'string', 'max:255']
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
                $user->updateProfilePhoto($input['photo']);
        }

        //     $imagePath = request('photo')->store('profile'.'public');

        //     $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
        //     $image->save();

        //     $imageArray = ['photo' => $imagePath];



        //     auth()->user()->profile->update(array_merge(
        //         $input,
        //         $imageArray ?? []
        // ));


        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
        ])->save();
    }
}
