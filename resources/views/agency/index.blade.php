<x-app-bank-layout>
    @if(session('success') === 'agency-created')
        <app-toast type="success" message="L'agence a bien été créé."></app-toast>
    @endif
    @if(session('success') === 'agency-updated')
        <app-toast type="success" message="L'agence a bien été mofifié."></app-toast>
    @endif
    @if(session('success') === 'agency-deleted')
        <app-toast type="success" message="L'agence a bien été supprimé."></app-toast>
    @endif
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Agences</h3>
                <div class="nk-block-des text-soft">
                    <p>Il y a {{ $agencies->total() }} agences.</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <div class="toggle-expand-content">
                        <ul class="justify-between g-3">
                            <li>
                                <a href="{{ route('agency.create') }}" class="btn text-white bg-primary"><em
                                        class="icon ni ni-plus"></em><span>Ajouter une agence</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($agencies->count() > 0)
        <div class="row g-gs">
            @foreach($agencies as $agency)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <a href="{{ route('agency.edit', ['agency' => $agency]) }}"
                                   class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <h6 class="title mb-1">{{ $agency->name }}</h6>
                                        <span class="sub-text">4 Clients</span>
                                    </div>
                                </a>
                            </div>
                            <p>
                                Manager : {{ $agency->agency_manager_name }} <br/>
                                Mobile: {{ $agency->mobile }}
                                <br/>
                                E-mail: {{ $agency->email }}
                            </p>
                            <ul class="d-flex flex-wrap g-1">
                                <li><span class="badge badge-dim bg-primary">{{ $agency->town->name }}</span></li>
                                <li>
                                    <span
                                        class="badge badge-dim bg-warning">{{ $agency->created_at->diffForHumans() }}</span>
                                </li>
                            </ul>

                            <a href="{{ route('agency.edit', ['agency' => $agency ]) }}"
                               class="btn btn-block btn-dim btn-success mt-4"><span>Editer l'agance</span></a>
                            <form method="post" action="{{ route('agency.destroy', ['agency' => $agency]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-dim btn-danger mt-2"><span>Supprimer l'agance</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-inner">
            {{ $agencies->links() }}
        </div>
    @endif
</x-app-bank-layout>
