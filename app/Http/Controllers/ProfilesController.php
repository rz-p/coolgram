<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.show', compact('user'));
    }

    // public function edit(User $user)
    // {
    //     $this->authorize('update', $user);
    //     /* if ($user->can('update', $user->profile)); */
    //     return view('profile.update-profile-information-form', compact('user'));
    // }

    // public function update(User $user)
    // {
    //     $this->authorize('update', $user->profile);
    //     // if ($user->can('update', $user->profile));

    //         $data = request()->validate([
    //             'description' => 'required|string',
    //             'url' => 'url', /* problem w/ url validation and PHP 7.3.x; works on PHP 7.2.x or lower */
    //             'image' => 'image',
    //         ]);

    //     if(request('image')){
    //         $imagePath = request('image')->store('profile','public');

    //         $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
    //         $image->save();

    //         $imageArray = ['image' => $imagePath];

    //     }

    //     auth()->user()->profile->update(array_merge(
    //        $data,
    //        $imageArray ?? []
    //     ));

    //     return redirect("/profile/{$user->id}");

    // }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

}
