<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">

                <form action="{{ route('notes.update', $note) }}" method="post">
                    @method('put')
                    @csrf

                    <x-input 
                        class="sm:rounded-md mb-1 w-full border-gray-300" 
                        type="text" 
                        field="title" 
                        name="title" 
                        placeholder="Title" 
                        autocomplete="off"
                        :value="@old('title', $note->title)">
                    </x-input>
                    
                    <x-textarea 
                        class="w-full mt-4" 
                        field="note" 
                        name="note" 
                        rows="10" 
                        placeholder="Start typing here..."
                        :value="@old('note', $note->text)">
                    </x-textarea>
                    
                    <button class="btn-link btn-lg mt-4">Save Note</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
