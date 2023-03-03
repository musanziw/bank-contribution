<x-guest-layout>
    <x-form.auth-card :title="__('Se connecter')">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <app-toast type="error" message="{{ $error }}"></app-toast>
            @endforeach
        @endif
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <div class="form-label-group">
                    <x-input-label :value="__('Nom d\'utilisateur')"/>
                </div>
                <div class="form-control-wrap">
                    <x-text-input type="text" name="username"
                                  :value="old('username', '')"
                                  placeholder="Enter le nom d'utilisateur"/>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <x-input-label for="password" :value="__('Mot de passe')"/>
                </div>
                <div class="form-control-wrap">
                    <x-text-input type="password" name="password"
                                  placeholder="Entrer le mot de passe"/>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember_me">
                    <label class="custom-control-label" for="remember_me">Se rappeler de moi ?</label>
                </div>
            </div>
            <div class="form-group">
                <x-primary-button class="btn-lg btn-block">
                    {{ __('Login') }}
                </x-primary-button>
            </div>
        </form>
    </x-form.auth-card>
</x-guest-layout>
