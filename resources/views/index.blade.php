<x-layout>
    @if(session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
</x-layout>
