<div class="nk-sidebar nk-sidebar-fixed is-dark" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: -16px 0 -40px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0; bottom: 0;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                 aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 16px 0 40px;">
                                    <ul class="nk-menu">
                                        <li class="nk-menu-item @if(request()->path() === 'bank/dashboard') active @endif">
                                            <a href="{{ route('bank.dashboard') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em
                                                        class="icon ni ni-dashboard-fill"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>

                                        <li class="nk-menu-item  @if(request()->is('bank/towns') || request()->is('bank/towns**') || request()->is('bank/town**')) active @endif">
                                            <a href="{{ route('town.index') }}" class="nk-menu-link"
                                               data-bs-original-title="" title="">
                                                <span class="nk-menu-icon"><em class="icon ni ni-list-index-fill"></em></span>
                                                <span class="nk-menu-text">Villes</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item  @if(request()->is('bank/agencies') || request()->is('bank/agency**') || request()->is('bank/agencies**')) active @endif">
                                            <a href="{{ route('agency.index') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em
                                                        class="icon ni ni-task-fill-c"></em></span>
                                                <span class="nk-menu-text">Agences</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="" class="nk-menu-link"
                                               data-bs-original-title="" title="">
                                                <span class="nk-menu-icon"><em
                                                        class="icon ni ni-user-add"></em></span>
                                                <span class="nk-menu-text">Utilisateurs</span>
                                            </a>
                                        </li>
{{--                                        <li class="nk-menu-item">--}}
{{--                                            <a href="{{ route('permission.index') }}" class="nk-menu-link"--}}
{{--                                               data-bs-original-title="" title="">--}}
{{--                                                <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>--}}
{{--                                                <span class="nk-menu-text">Permissions</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nk-menu-item">--}}
{{--                                            <a href="{{ route('role.index') }}" class="nk-menu-link"--}}
{{--                                               data-bs-original-title="" title="">--}}
{{--                                                <span class="nk-menu-icon"><em class="icon ni ni-notice"></em></span>--}}
{{--                                                <span class="nk-menu-text">Roles</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
                                        <li class="nk-menu-item  @if(request()->is('profile**')) active @endif">
                                            <a href="" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                                <span class="nk-menu-text">Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 993px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
