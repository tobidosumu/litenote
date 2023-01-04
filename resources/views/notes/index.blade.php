<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>

            <a href="{{ route('notes.create') }}" class="btn-link btn-lg hover:btn-hover text-white mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 text-white inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                  </svg>
                  
               New Note
            </a>

            @forelse ($notes as $note)

                <a href="{{ route('notes.show', $note) }}">
                    <div class="my-6 p-6 bg-white hover:bg-blue-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl">
                            {{ $note->title }}
                        </h2>
    
                        <p class="mt-2">
                            {{ Str::limit($note->text, 165) }}
                        </p>
    
                        <span class="block mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
                    </div>
                </a>

                @empty

                <p>You have no notes yet.</p>

            @endforelse

            {{ $notes->links() }}

        </div>
    </div>
</x-app-layout>
