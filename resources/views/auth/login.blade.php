<x-layout>
    <div class="auth-container">
        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label class="auth-label" for="email">E-mail</label>
            <input class="auth-input" type="email" id="email" name="email" required/>
            <label class="auth-label" for="password">Password</label>
            <input class="auth-input" type="password" id="password" name="password" required/>
            <button class="auth-btn" type="submit">Login</button>
        </form>
    </div>
</x-layout>
