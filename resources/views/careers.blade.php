<x-layout>
    <div class="auth-container">
        <form class="auth-form" method="POST" action="{{ route('careers.submit') }}">
            @csrf
            <label class="auth-label" for="role">What role are you applying for?<label>
            <select class="auth-input" id="role" name="role">
                <option value="" selected disabled>Choose a role</option>
                @if(!Auth::user()->is_admin)
                <option value="admin">Administrator</option>
                @endif
                @if(!Auth::user()->is_revisor)
                <option value="revisor">Revisor</option>
                @endif
                @if(!Auth::user()->is_writer)
                <option value="writer">Writer</option>
                @endif
            </select>
            <label class="auth-label" for="email">E-mail</label>
            <input class="auth-input" type="email" id="email" name="email" value="{{ Auth::user()->email }}" required/>
            <label class="auth-label" for="description">Why do you want to apply for this role?</label>
            <textarea class="auth-input textarea" id="description" name="message" value="{{ old('message') }}" required></textarea>
            <button class="auth-btn" type="submit">Submit</button>
        </form>
    </div>
</x-layout>
