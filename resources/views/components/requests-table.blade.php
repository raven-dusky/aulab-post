<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roleRequests as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @switch($role)
                    @case('administrator')
                    <form method="POST" action="{{ route('admin.setAdmin', $user) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Active {{ $role }}</button>
                    </form>
                    @break
                    @case('revisor')
                    <form method="POST" action="{{ route('admin.setRevisor', $user) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Active {{ $role }}</button>
                    </form>
                    @break
                    @case('writer')
                    <form method="POST" action="{{ route('admin.setWriter', $user) }}">
                        @csrf
                        @method('PATCH')
                        <button type="submit">Active {{ $role }}</button>
                    </form>
                    @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
