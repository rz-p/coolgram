<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Profile
            </h2>
        </x-slot>

        <div class="container align-content-center">
            <div class="row">
                <div class="col-3 pl-5 pt-6 justify-items-center">
                    <img class="rounded-full" style="height:150px; width:150px; float:left;"
                src="{{ Auth::User()->profile_photo_url }}">
                </div>

                <div class="border bg-blue-300 flex">
                    <div class="col-10 pt-1 pl-5  justify-content-between">
                        <div class="break-long-words items-center">
                            <p class="text-xl font-extrabold">
                                {{ Auth::User()->name }}
                            </p>
                        </div>
                        @auth
                        {{-- add post button --}}
                        <button href="/p/create"  class="bg-blue-500 text-white strong border-blue-500 hover:bg-blue-200 hover:text-blue-500 p-1 rounded" >
                            <a href="/p/create">
                                + Add New Post
                            </a>
                        </button>

                        {{-- edit profile button --}}
                        <button href='/profile/{{ Auth::User()->id }}/edit/' class="bg-blue-500 text-white strong border-blue-500 hover:bg-blue-200 hover:text-blue-500 p-1 rounded">
                                <a href="/profile/{{ Auth::User()->id }}/edit/">
                                    Edit Profile
                                </a>
                        </button>
                        @endauth

                        <div class="font-normal bg-red-300 items-center">
                            @ {{ Auth::user()->username }}
                        </div>

                        <div class="bg-yellow-300 flex" style="width: 500px;height:auto;">
                            <div class="pr-3" style="word-wrap:break-word">
                                {{-- {{ "$user->profile->description" --}}----------------------------------------------------------------------
                            </div>
                        </div>

                        {{-- <div><a href={{ $user->profile->url }}>{{ $user->profile->url }}</a></div> --}}
                        <div class="flex bg-gray-500 align-items-baseline">
                            <div class="pr-3"><strong>{{ Auth::User()->posts->count() }}</strong> photos</div>
                            <div class="pr-3"><strong>472</strong> likes</div>
                            <div class="pr-3" style="cursor: pointer;"><strong>510</strong> followers</div>
                        </div>
                    </div>
                </div>

                <div class="ml-3 pt-3" style="border-top: 2px solid rgba(0,0,0,0.1); margin:20px 0 0 0;">

                    <div class="row-span-3 pt-2">
                        @foreach(Auth::User()->posts as $post)
                            <div class="col-span-3 pb-3">
                                <a href="/p/{{ $post->id }}">
                                    <img src="/storage/{{ $post->image }}" class="" style="height:300px; width:300px;"alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
