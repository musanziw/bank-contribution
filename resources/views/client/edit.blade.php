<x-agent-layout>
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
                                <x-input-label for="name" :value="__('Nom du client')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="name" type="text"
                                                  placeholder="Le nom du client"
                                                  :value="old('name', $client->name)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="account_number" :value="__('Numéro du compte')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="account_number" type="text"
                                                  placeholder="Entrez le numéro de compte"
                                                  :value="old('account_number', $client->account_number)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="address" :value="__('Adresse')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="address" type="text"
                                                  placeholder="L'adresse du client"
                                                  :value="old('address', $client->address)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="phone" :value="__('Mobile')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="phone" type="text"
                                                  placeholder="Le numéro de l'agence"
                                                  :value="old('phone', $client->phone)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="services[]">Service.s</label>
                                <select class="form-select select2-input" multiple data-search="off" name="services[]"
                                        id="services[]"
                                        data-placeholder="Choisir le service">
                                    <option value=""></option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}"
                                                @if(in_array($service->id, $client->services->pluck('id')->toArray())) selected @endif>{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="birthdate" :value="__('Date de naissance')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="birthdate" name="birthdate" type="text"
                                                  placeholder="Date de naissance"
                                                  :value="old('birthdate', $client->birthdate->translatedFormat('m/d/Y'))"
                                                  data-provide="datepicker"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="sex">Sexe</label>
                                <select class="form-select select2-input" data-search="off" name="sex"
                                        id="sex"
                                        data-placeholder="Choisir le sexe">
                                    <option value=""></option>
                                    <option value="M" @if($client->sex == 'M') selected @endif>Masculin</option>
                                    <option value="F" @if($client->sex == 'F') selected @endif>Feminin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" @if($client->is_active) checked
                                           @endif name="is_active" id="is_active">
                                    <label class="custom-control-label" for="is_active">Inactif / Actif</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Modifier le client</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-agent-layout>
