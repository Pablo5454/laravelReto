<x-guest-layout>
    <div class="login-container">
        <h2 class="login-title">{{ __('Iniciar Sesión') }}</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Correo Electrónico')" />
                <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="input-field" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Remember Me -->
            <div class="remember-me">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                    <span>{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="login-actions">
                @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-primary-button class="login-button">
                    {{ __('Ingresar') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #4e54c8;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .checkbox {
            margin-right: 8px;
        }

        .login-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forgot-password {
            font-size: 0.9rem;
            color: #4e54c8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #8f94fb;
        }

        .login-button {
            background-color: #4e54c8;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .login-button:hover {
            background-color: #8f94fb;
            transform: scale(1.05);
        }
    </style>
</x-guest-layout>
