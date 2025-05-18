<div>
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>
            <span>{{$message}}</span>
        </div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf
        
        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}">

            @error('name')
                <span>{{$message}}</span>
            @enderror
            
        </div>
        <br>
        <div>
            <input name="email" placeholder="Email" value="{{ old('email') }}">

            @error('email')
                <span>{{$message}}</span>
            @enderror
            
        </div>
        <br>
        <div>
            <input name="email_confirmation" placeholder="Email Confirmation">
            
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Senha">

            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Registrar</button>

    </form>
</div>
