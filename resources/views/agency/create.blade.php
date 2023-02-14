<x-app-bank-layout>
    @if($errors->any())
        <app-toast type="error" message="{{ $errors->first() }}"></app-toast>
    @endif
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <form method="post" action="{{ route('agency.create') }}" class="mt-6 space-y-6">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Nom de l\'agence')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="name" type="text"
                                                  placeholder="Le nom de l'agence"
                                                  :value="old('name', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="email" :value="__('E-mail')"/>
                                <div class="form-control-wrap">
                                    <x-text-input  name="email" type="email"
                                                  placeholder="Entrez l'email de l'agence"
                                                  :value="old('email', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="agency_manager_name" :value="__('Nom du manager')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="agency_manager_name" type="text"
                                                  placeholder="Le nom du manager"
                                                  :value="old('agency_manager_name', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <x-input-label for="mobile" :value="__('Mobile')"/>
                                <div class="form-control-wrap">
                                    <x-text-input name="mobile" type="text"
                                                  placeholder="Le numéro de l'agence"
                                                  :value="old('mobile', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="town_id">Ville</label>
                                <select class="form-select select2-input" data-search="off" name="town_id"
                                        id="town_id"
                                        data-placeholder="Choisir la ville">
                                    <option value=""></option>
                                    @foreach($towns as $town)
                                        <option value="{{ $town->id }}">{{ $town->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Enregistrer l'agence</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-bank-layout>
