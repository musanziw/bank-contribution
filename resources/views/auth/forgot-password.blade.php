<x-guest-layout>
    <x-form.auth-card :title="__('Mot de passe oublié')">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <div class="form-label-group">
                    <x-input-label for="password" :value="__('E)mail')"/>
                    <a class="link link-primary link-sm" href="{{ route('login') }}">
                        Se connecter ?</a>
                </div>
                <div class="form-control-wrap">
                    <x-text-input id="email" placeholder="Entrew votre email"  type="email" name="email" :value="old('email')"
                                  required autofocus/>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <x-primary-button>
                        {{ __('Envoyez le lien de réinitialisation') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </x-form.auth-card>
</x-guest-layout>
