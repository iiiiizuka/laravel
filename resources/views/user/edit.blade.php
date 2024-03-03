<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1>User Form</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- フォームの開始 -->
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <!-- 名前の入力フィールド -->
                <label for="name">名前:</label>
                <input type="text" id="name" name="name">

                <!-- メールアドレスの入力フィールド -->
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email">

                <!-- 生年月日の選択 -->
                <label for="birthdate">生年月日:</label>
                <input type="date" id="birthdate" name="birth_on">

                <input tyep="hidden" name="password" value="hogehoge">

                <!-- 送信ボタン -->
                <button type="submit">送信</button>
            </form>
        </div>
    </div>
</x-app-layout>
