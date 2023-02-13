<x-guest-layout>
    <x-form.auth-card :title="__('Réinitialiser le mot de passe')">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <x-input-label for="email" :value="__('E-mail')"/>
                <div class="form-label-group">
                    <x-text-input id="email" type="email" name="email"
                                  placeholder="Entrez votre email"
                                  :value="old('email', $request->email)" required autofocus/>
                </div>
            </div>
            <div class="form-group">
                <x-input-label for="password" :value="__('Mot de passe')"/>
                <div class="form-label-group">
                    <x-text-input id="password" placeholder="Entrez le nouveau mot de passe" type="password" name="password" required/>
                </div>
            </div>
            <div class="form-group">
                <x-input-label for="password_confirmation" :value="__('Confirmez le nouveau mot de passe')"/>
                <div class="form-label-group">
                    <x-text-input id="password_confirmation"
                                  placeholder="Confirmez le nouveau mot de passe"
                                  type="password"
                                  name="password_confirmation" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <x-primary-button>
                        {{ __('Réinitialiser le mot de passe') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </x-form.auth-card>
</x-guest-layout>
