<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        {{-- The best athlete wants his opponent at his best. --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Profile
            </h2>
        </x-slot>

        <x-jet-form-section submit="UpdateUserProfileDescription">
            <x-slot name="title">
                Profile Information
            </x-slot>

            <x-slot name="description">
                Update your profile information and description.
            </x-slot>

            <x-slot name="form">
                
                <form action="/p/" enctype="multipart/form-data" method="post">
                    @csrf
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
                <x-jet-action-message class="mr-3" on="Saved">
                    Saved.
                </x-jet-action-message>

                <x-jet-button>
                    Save
                </x-jet-button>
            </x-slot>

        </x-jet-form-section>

    </div>
</div>

