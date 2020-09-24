<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Profile
            </h2>
        </x-slot>

        <div class="container align-content-center">
            <div class="row">

                <div class="ml-3 pt-3" style="border-top: 2px solid rgba(0,0,0,0.1); margin:20px 0 0 0;">

                    <div class="row-span-3 pt-2">
                        @foreach($post as $post)
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
