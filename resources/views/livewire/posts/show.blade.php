<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="container">
        <div class="row border d-flex" style="background-color: #ffffff ">
            <div class="col-8">
                <img src="{{ $post->user->photo_url }}" class="w-100" alt="">
            </div>

            {{-- <div>
                <img src="#" alt="">
            </div> --}}

            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile_photo_url }}" class=" rounded-circle mt-3" style="max-width: 40px;">
                        </div>
                        <div class="pt-3">
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <a class="pl-3" href="#">Follow</a>
                            </span>
                        </div>
                    </div>

                    <hr>

                <p><span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->profile->user_id }}">
                        <span class="text-dark">{{ $post->user->profile_photo_url }}</span>
                    </a>
                    <span class="font-weight-normal">
                        {{ $post->caption }}
                    </span>
                </p>

                </div>
            </div>

            <div class="d-flex p-3 col-3">
                <p>{{ $post->caption }}</p>
            </div>

        </div>
    </div>
</div>
