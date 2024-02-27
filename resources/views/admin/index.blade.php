<x-admin.app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1>Users</h1>

            @foreach ($users as $user)
                <p>{{ $user->name }}</p>
            @endforeach
        </div>
    </div>
</x-admin.app-layout>
