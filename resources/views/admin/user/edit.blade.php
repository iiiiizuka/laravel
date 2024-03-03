<x-admin.app-layout>
    <form method="POST" action="{{ route('admin.user.edit', $user->id) }}">
        @csrf

        @include('frame.user.edit')
    </form>
</x-admin.app-layout>
