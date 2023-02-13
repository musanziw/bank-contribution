<x-app-bank-layout>
    @if(session('success') === 'town-created')
        <app-toast type="success" message="La ville a bien été créé."></app-toast>
    @endif
    @if(session('success') === 'town-updated')
        <app-toast type="success" message="La ville a bien été mofifié."></app-toast>
    @endif
    @if(session('success') === 'town-deleted')
        <app-toast type="success" message="La ville a bien été supprimé."></app-toast>
    @endif
    <div class="nk-content-body">
        <div class="nk-block-head">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Villes</h3>
                    <div class="nk-block-des text-soft">
                        <p>Il y a {{ $towns->total() }} villes.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content">
                            <ul class="justify-between g-3">
                                <li>
                                    <a href="{{ route('town.create') }}" class="btn text-white bg-primary"><em
                                            class="icon ni ni-plus"></em><span>Ajouter une ville</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($towns->count() > 0)
            <div class="card card-bordered card-preview">
                <table class="table table-orders">
                    <thead class="tb-odr-head">
                    <tr class="tb-odr-item">
                        <th class="tb-odr-info">
                            #
                        </th>
                        <th class="tb-odr-info">
                            Libellé
                        </th>
                        <th class="tb-odr-info">
                            <span class="tb-odr-id">Actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="tb-odr-body">
                    @foreach($towns as $town)
                        <tr class="tb-odr-item">
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $town->id }}</span>
                            </td>
                            <td class="tb-odr-info">
                                <span class="tb-odr-id">{{ $town->name }}</span>
                            </td>
                            <td class="tb-odr-info">
                                <a href="{{ route('town.edit', ['town' => $town]) }}"
                                   class="btn btn-primary">Edition</a>
                                <form action="{{ route('town.destroy', ['town' => $town]) }}"
                                      method="post"
                                      style="display: inline-block" onclick="return confirm('Confirmez avant de supprimer ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <div class="card-inner">
            {{ $towns->links() }}
        </div>
    </div>
</x-app-bank-layout>
