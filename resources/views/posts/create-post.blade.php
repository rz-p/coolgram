<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add New Post
            </h2>
        </x-slot>

        <x-jet-section-border />
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @livewire('posts.create')
            </div>

        <x-jet-section-border />
    </div>
</x-app-layout>
