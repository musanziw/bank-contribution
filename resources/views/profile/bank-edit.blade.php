<x-app-layout>
    @if(session('status') === 'profile-updated')
        <app-toast type="success" message="Your profile has been updated"></app-toast>
    @endif
    @if(session('status') === 'password-updated')
        <app-toast type="success" message="Your password has been updated"></app-toast>
    @endif
    @if($errors->any())
        <app-toast type="error" message="{{ $errors->first() }}"></app-toast>
    @endif
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title">My profile</span>
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Name')"/>

                                <x-text-input id="name" name="name" type="text"
                                              :value="old('name', $user->name)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')"/>

                                <x-text-input id="email" name="email" type="text"
                                              :value="old('email', $user->email)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="last_name" :value="__('Lastname')"/>
                                <x-text-input id="last_name" name="last_name" type="text"
                                              :value="old('last_name', $user->last_name)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="first_name" :value="__('Firstname')"/>
                                <x-text-input id="first_name" name="first_name" type="text"
                                              :value="old('first_name', $user->first_name)" autocomplete="name"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="address" :value="__('Address')"/>

                                <x-text-input id="address" name="address" type="text"
                                              :value="old('address', $user->address)"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="phone" :value="__('Phone number')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="phone" name="phone" type="text"
                                                  :value="old('phone', $user->phone)"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Save infomations</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <span class="preview-title-lg overline-title">My password</span>
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                    <div class="row gy-4">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="current_password" :value="__('Current password')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="current_password" placeholder="Your actual password"
                                                  name="current_password" type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="password" :value="__('New password')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="password" placeholder="Your new password" name="password"
                                                  type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm password')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="password_confirmation" placeholder="Confirm your password"
                                                  name="password_confirmation" type="password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Update my password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
