<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Profile
        </h2>
    </x-slot>

    <div class="justify-items-center border">
        <div class="flex">
            <div class="col-6 p-5 ml-5">
                <img class=" rounded-full border m-1 w-50"
            src="{{ Auth::user()->profile_photo_url }}">
            </div>

            <div class="flex border">
                <div class="col-6 p-5">
                    <div class="break-long-words items-center">
                       <p class="text-xl font-extrabold"> {{ Auth::user()->name }} </p>
                    </div>

{{--                 @cannot('update', Profile::class)
                    <follow-button user-id="{{ Auth::user()->profile->user_id }}"></follow-button>
                @endcan --}}
                {{--                 <edit-profile-button></edit-profile-button>
                    <add-post-button></add-post-button> --}}
                   {{--  @can('update', $user->profile) --}}
                        {{-- add post button --}}
                        <button href="/p/create"  class="bg-blue-500 text-white strong border-blue-500 hover:bg-blue-200 hover:text-blue-500 p-1 rounded" >
                            <a href="/p/create">+</a>
                        </button>

                        {{-- edit profile button --}}
                        <button href='/profile/{{ Auth::user()->id }}/edit' class="bg-blue-500 text-white strong border-blue-500 hover:bg-blue-200 hover:text-blue-500 p-1 rounded">
                               <a href="/profile/{{ Auth::user()->id}}/edit">Edit Profile</a>
                        </button>
                   {{--  @endcan --}}



    {{--            <button id="follow-button" class="button col-2 pl-3"
                        style="cursor: pointer; background-color:#000000; color: white; border: 2px solid #ffffff; align-content:space-around; border-radius: 8px; font-size:10px; display:inline-block">
                        <h3>...</h3>
                    </button> --}}

                    <div class="flex pt-2 font-weight-bold">@ {{ Auth::user()->username }} </div>
                    <div class="flex" style="width: 500px;height:auto;">
                        {{-- <div class="pr-3" style="word-wrap:break-word">
                            {{ $user->profile->description }}
                        </div> --}}
                    </div>
                    {{-- <div><a href={{ $user->profile->url }}>{{ $user->profile->url }}</a></div> --}}
                    <div class="flex">
                    {{-- <div class="pr-3 pb-0 pt-3"><strong>{{ $user->posts->count() }}</strong> photos</div> --}}
                        <div class="p-3"><strong>472</strong> likes</div>
                        <div class="p-3" style="cursor: pointer;"><strong>510</strong> followers</div>
                    </div>
                </div>
            </div>

            {{-- <div class="d-flex" style="border-top: 2px solid rgba(0,0,0,0.05); width:fit-content; margin:3px 0 0 0;">

                <div class="row pt-2">
                    @foreach($user->posts as $post)
                        <div class="col-4 pb-3">
                            <a href="/laratest/public/p/{{ $post->id}}">
                                    <img src="/laratest/storage/app/public/{{ $post->image }}" class="w-100" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
 --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>
