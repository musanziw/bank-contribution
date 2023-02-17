<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="{{ route('profile.edit') }}">
                            <div class="user-toggle">
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">
                                        Bank Admin
                                    </div>
                                    <div class="user-name">{{ Auth::user()->username }}</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="">
                        <form action="{{ route('bank.logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success btn-dim">
                                Se déconnecter
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
