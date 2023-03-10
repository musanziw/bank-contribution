@props(['title'])

<div class="nk-wrap nk-wrap-nosidebar">
    <div class="nk-content ">
        <div class="nk-block nk-block-middle nk-auth-body wide-xs">
            <div class="brand-logo pb-4 text-center">
                <a href="" class="logo-link">
                    <img class="logo-dark logo-img logo-img-lg" src="{{ asset('images/bk.jpeg') }}"
                         alt="logo-dark">
                </a>
            </div>
            <div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">{{ $title }} / <span>
                                    @if(request()->is('bank/login'))
                                        <a href="{{ route('login') }}">Login Agent</a>
                                    @else
                                        <a href="{{ route('bank.login') }}">Login Banque</a>
                                    @endif
                                </span>
                            </h4>

                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
