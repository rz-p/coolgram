<div>

    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h2><strong>Add New Post</strong> </h2>
                    </div>

                    <div class="form-group row">
                        <label for="caption" class="col-md-4; col-form-label">Caption</label>
                        <input id="caption"
                                type="text"
                                class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                name="caption"
                                caption="caption"
                                value="{{ old('caption') }}" required autofocus>

                        @if ($errors->has('caption'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('caption') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4; col-form-label">Post Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="button">Add New Post</button>
                    </div>

                </div>
            </div>
        </form>
    </div>






















    {{-- Care about people's approval and you will be their prisoner.
    <div>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat unde repellat ea incidunt. Quos sequi aspernatur delectus vero iste,
           ut voluptates minima voluptatibus placeat, dolore doloribus iure expedita quia assumenda!
       </p>
    </div> --}}

    {{-- <x-jet-form-section submit="#">
        <x-slot name="title">
            Create a New Post
        </x-slot> --}}

        {{-- <x-slot name="#">
            <!-- Photo -->
                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                    <!-- Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="photo"
                                x-ref="photo"
                                x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />

                    <x-jet-label for="photo" value="Photo" />

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview">
                        <span class="block rounded-full w-20 h-20"
                              x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div> --}}

                    {{-- <x-jet-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        Select A New Photo
                    </x-jet-secondary-button>

                    <x-jet-input-error for="photo" class="mt-2" />
                </div> --}}


            {{-- <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="caption" value="caption" />
                <x-jet-input id="caption" type="text" class="mt-1 block w-full" wire:model.defer="state.caption" autocomplete="caption" />
                <x-jet-input-error for="caption" class="mt-2" />
            </div> --}}
        {{-- </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="posted">
                Posted.
            </x-jet-action-message>

            <x-jet-button>
                Post
            </x-jet-button>
        </x-slot>
    </x-jet-form-section> --}}


</div>
