<x-guest-layout>
    <x-form.auth-card :title=" __('Confrim Password')">
        <div class="form-group">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="form-group">
                    <x-input-label for="password" :value="__('Mot de passe')"/>
                    <div class="form-label-group">
                        <x-text-input id="password"
                                      type="password"
                                      name="password"
                                      placeholder="Enter your password"
                                      required autocomplete="current-password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <x-primary-button>
                            {{ __('Confirm your password') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </x-form.auth-card>
</x-guest-layout>
