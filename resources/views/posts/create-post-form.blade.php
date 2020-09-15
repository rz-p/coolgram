<x-jet-form-section submit="CreateNewPost">
    <x-slot name="title">
        Add New Post
    </x-slot>

    <x-slot name="description">
        Upload an Image
    </x-slot>

    <x-slot name="form">
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

                <!-- Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block  w-30 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    Select a Photo
                </x-jet-secondary-button>

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Caption -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="caption" value="caption" />
            <x-jet-input id="caption" type="text" class="mt-1 block w-full" wire:model.defer="state.caption" autocomplete="caption" />
            <x-jet-input-error for="caption" class="mt-2" />
        </div>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="posted">
            Posted.
        </x-jet-action-message>



        <x-jet-button>
            Post
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
