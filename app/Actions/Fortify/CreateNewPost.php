<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreateNewPost;
// use Intervention\Image\ImageManager;

class CreateNewPost implements CreateNewPost
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($posts, array $input)
    {
        Validator::make($input, [
            'caption' => ['string', 'max:255'],
            'photo' => ['required', 'image'],
            'user_id'
        ])->validate();

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
