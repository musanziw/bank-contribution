<x-agent-layout>
    @if(session('success') === 'client-created')
        <app-toast type="success" message="Le client a bien été créé."></app-toast>
    @endif
    @if(session('success') === 'client-updated')
        <app-toast type="success" message="Le client a bien été mofifié."></app-toast>
    @endif
    @if(session('success') === 'client-deleted')
        <app-toast type="success" message="Le client a bien été supprimé."></app-toast>
    @endif
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Clients</h3>
                <div class="nk-block-des text-soft">
                    <p>Il y a {{ $clients->total() }} clients.</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <div class="toggle-expand-content">
                        <ul class="justify-between g-3">
                            <li>
                                <a href="{{ route('client.create') }}" class="btn text-white bg-primary"><em
                                        class="icon ni ni-plus"></em><span>Ajouter un client</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($clients->count() > 0)
        <div class="row g-gs">
            @foreach($clients as $client)
                <div class="col-sm-3 col-lg-4 col-xxl-3">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <a href="{{ route('client.edit', ['client' => $client]) }}"
                                   class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <h6 class="title mb-1">{{ $client->name }}</h6>
                                        <span class="sub-text">{{ $client->address }}</span>
                                    </div>
                                </a>
                            </div>
                            <p>
                                Genre : {{ $client->sex  == 'F' ? 'Féminin' : 'Masculin'}} <br/>
                                Ajouté par : {{ $client->user->name }} <br/>
                                Service.s :
                                @foreach($client->services as $services)
                                    {{ $services->name }} -
                                @endforeach
                                <br/>
                                Ajouté par : {{ $client->user->name }}
                            </p>
                            <ul class="d-flex flex-wrap g-1">
                                <li>
                                    <span
                                        class="badge badge-dim {{ $client->is_active ? 'bg-primary' : 'bg-danger' }}">{{ $client->is_active ? 'Actif': 'Inactif' }}</span>
                                </li>
                                <li>
                                    <span class="badge badge-dim bg-success">{{ $client->birthdate->diffInYears('now') }} ans</span>
                                </li>
                                <li>
                                    <span class="badge badge-dim bg-secondary">{{ $client->phone }}</span>
                                </li>
                                <li>
                                    <span
                                        class="badge badge-dim bg-warning">{{ $client->created_at->diffForHumans() }}</span>
                                </li>
                            </ul>
                            <a href="{{ route('client.edit', ['client' => $client ]) }}"
                               class="btn btn-block btn-dim btn-primary mt-4"><span>Editer le client</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-inner">
            {{ $clients->links() }}
        </div>
    @endif
</x-agent-layout>
