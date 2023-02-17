<x-bank-layout>
    @if(session('status') === 'profile-updated')
        <app-toast type="success" message="Informations mises à jour."></app-toast>
    @endif
    @if(session('status') === 'password-updated')
        <app-toast type="success" message="Mot de passe mise à jour"></app-toast>
    @endif
    @if($errors->any())
        <app-toast type="error" message="{{ $errors->first() }}"></app-toast>
    @endif
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title">Mes informations </span>
                @foreach($user->subscriptions as $subscription)
                    <span class="sub-title text-azure">Abonné {{ $subscription->started_at->diffForHumans() }} </span>
                    <p class="sub-title text-azure mb-4">Finira {{ $subscription->ended_at->diffForHumans() }} </p>
                @endforeach
                <form method="post" action="" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Nom')"/>

                                <x-text-input id="name" name="name" type="text"
                                              :value="old('name', $user->name)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="email" :value="__('E-mail')"/>

                                <x-text-input id="email" name="email" type="text"
                                              :value="old('email', $user->email)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="username" :value="__('Nom d\'utilisateur')"/>
                                <x-text-input id="username" name="username" type="text"
                                              :value="old('username', $user->username)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="representative_name" :value="__('Représentant')"/>
                                <x-text-input id="representative_name" name="representative_name" type="text"
                                              :value="old('representative_name', $user->representative_name)" autocomplete="name"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="address" :value="__('Adresse')"/>

                                <x-text-input id="address" name="address" type="text"
                                              :value="old('address', $user->address)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="phone" :value="__('Mobile')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="phone" name="phone" type="text"
                                                  :value="old('phone', $user->phone)"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Enregistrer les infomations</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title">Mot de passe</span>
                <form method="post" action="{{ route('bank.password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                    <div class="row gy-4">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="current_password" :value="__('Mot de passe actuel')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="current_password" placeholder="Ancien mot de passe"
                                                  name="current_password" type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Nouveau mot de passe')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="password" placeholder="Nouveau mot de passe" name="password"
                                                  type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="password_confirmation" placeholder="Confirmez le mot de passe"
                                                  name="password_confirmation" type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Mettre à jour mon mot de passe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-bank-layout>
