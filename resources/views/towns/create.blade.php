<x-bank-layout>
    @if($errors->any())
        <app-toast type="error" message="{{ $errors->first() }}"></app-toast>
    @endif
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="preview-block">
                <form method="post" action="{{ route('town.create') }}" class="mt-6 space-y-6">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Libellé')"/>
                                <div class="form-control-wrap">
                                    <x-text-input id="name" name="name" type="text"
                                                  placeholder="Le nom de la ville"
                                                  :value="old('name', '')"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Enregistrer la ville</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-bank-layout>
