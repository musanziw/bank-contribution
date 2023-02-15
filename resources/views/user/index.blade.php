<x-app-bank-layout>
    @if(session('success') === 'user-created')
        <app-toast type="success" message="L'agent a bien été créé."></app-toast>
    @endif
    @if(session('success') === 'user-updated')
        <app-toast type="success" message="L'agent a bien été mofifié."></app-toast>
    @endif
    @if(session('success') === 'user-deleted')
        <app-toast type="success" message="L'agent a bien été supprimé."></app-toast>
    @endif
    <div class="nk-block-head">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Agents</h3>
                <div class="nk-block-des text-soft">
                    <p>Il y a {{ $users->total() }} agencts.</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <div class="toggle-expand-content">
                        <ul class="justify-between g-3">
                            <li>
                                <a href="{{ route('user.create') }}" class="btn text-white bg-primary"><em
                                        class="icon ni ni-plus"></em><span>Ajouter un agent</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($users->count() > 0)
        <div class="row g-gs">
            @foreach($users as $user)
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="card">
                        <div class="card-inner">
                            <div class="team">
                                <div class="user-card user-card-s2">
                                    <div class="user-avatar lg bg-primary">
                                        <span>{{ $user->name[0] }}</span>
                                        <div
                                            class="status dot dot-lg @if($user->status) dot-success @else dot-danger @endif"></div>
                                    </div>
                                    <div class="user-info">
                                        <h6>{{ $user->name }}</h6>
                                        <h6>{{ $user->username }}</h6>
                                        <span class="sub-text">{{ $user->address }}</span>
                                    </div>
                                </div>
                                <ul class="team-info">
                                    <li>
                                        <span>Date d'ajout</span><span>{{ $user->created_at->translatedFormat('d M Y') }}</span>
                                    </li>
                                    <li><span>Phone</span><span>{{ $user->phone }}</span></li>
                                    <li><span>Role</span><span>{{ $user->role->name }}</span></li>
                                    <li><span>Agence</span><span>{{ $user->agency->name }}</span></li>
                                    <li><span>Email</span><span>{{ $user->email }}</span></li>
                                </ul>
                                <div class="team-view">
                                    <a href="{{ route('user.edit', ['user' => $user]) }}" class="btn btn-block btn-dim btn-primary"><span>Editer l'agent</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-inner">
            {{ $users->links() }}
        </div>
    @endif
</x-app-bank-layout>
