<x-layout>
    @if(session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    <div>
        <h2>(Administrator) Requests awaiting confirmation:</h2>
        <x-requests-table :roleRequests="$adminRequests" role="administrator" />
    </div>
    <div>
        <h2>(Revisor) Requests awaiting confirmation:</h2>
        <x-requests-table :roleRequests="$revisorRequests" role="revisor" />
    </div>
    <div>
        <h2>(Writer) Requests awaiting confirmation:</h2>
        <x-requests-table :roleRequests="$writerRequests" role="writer" />
    </div>
</x-layout>
