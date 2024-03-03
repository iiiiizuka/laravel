<x-admin.app-layout>
    <form method="POST" action="{{ route('admin.user.create') }}">
        @csrf

        @include('frame.user.create')
    </form>
</x-admin.app-layout>
