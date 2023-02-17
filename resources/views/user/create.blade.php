<x-bank-layout>
    @if($errors->any())
        <app-toast type="error" message="{{ $errors->first() }}"></app-toast>
    @endif
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <form method="post" action=" " class="mt-6 space-y-6">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Nom de l\'agent')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="name" type="text"
                                                  placeholder="Le nom de l'agence"
                                                  :value="old('name','')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="email" :value="__('E-mail')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="email" type="email"
                                                  placeholder="Entrez l'email de l'agence"
                                                  :value="old('email', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="username" :value="__('Nom utilisateur')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="username" type="text"
                                                  placeholder="Le nom utilisateur"
                                                  :value="old('username','')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="phone" :value="__('Mobile')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="phone" type="text"
                                                  placeholder="Le numéro de l'agence"
                                                  :value="old('phone', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="address" :value="__('Addrese')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="address" type="text"
                                                  placeholder="L'adresse"
                                                  :value="old('address', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="agence">Agence</label>
                                <select class="form-select select2-input" data-search="off" name="agence"
                                        id="agence"
                                        data-placeholder="Affecter a une agence">
                                    <option value=""></option>
                                    @foreach($agencies as $agency)
                                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="role">Agence</label>
                                <select class="form-select select2-input" data-search="off" name="role"
                                        id="role"
                                        data-placeholder="Affecter a un role">
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status">
                                    <label class="custom-control-label" for="status">Inactif / Actif</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Enregistrer l'agent</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-bank-layout>
