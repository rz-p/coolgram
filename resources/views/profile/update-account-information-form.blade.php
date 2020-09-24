
<x-jet-form-section submit="UpdateUserProfileDescription">
    <x-slot name="title">
        Profile Information
    </x-slot>

    <x-slot name="description">
        Update your profile information and description.
    </x-slot>

    <x-slot name="form" >
        <form action="/p/" enctype="multipart/form-data" method="post">
            <!-- Profile Description -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="description" value="Profile Description" />
                <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="state.description" autocomplete="description" />
                <x-jet-input-error for="description" class="mt-2" />
            </div>

            <!-- Profile URL -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="url" value="URL" />
                <x-jet-input id="url" type="text" class="mt-1 block w-full" wire:model.defer="state.url" autocomplete="url" />
                <x-jet-input-error for="url" class="mt-2" />
            </div>
        </form>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Saved.
        </x-jet-action-message>

        <x-jet-button>
            Save
        </x-jet-button>
    </x-slot>
</x-jet-form-section>

