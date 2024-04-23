<div class="nk-apps-sidebar is-dark">
    <div class="nk-apps-brand">
        <a href="{{ route('dashboard') }}" class="logo-link">
            <img class="logo-light logo-img" src="" srcset=" 2x" alt="logo">
            <img class="logo-dark logo-img" src="" srcset="2x" alt="logo-dark">
        </a>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body">
            <div class="nk-sidebar-content" data-simplebar>
                <div class="nk-sidebar-menu">
                    <ul class="nk-menu apps-menu">
                        <x-pages.side-link
                                :title="__('Gestion Entiter')"
                                :route="route('entities-lists')"
                                icon="folders"
                        />
                    </ul>
                </div>
                <div class="nk-sidebar-footer">
                    <ul class="nk-menu nk-menu-md">
                        <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link" title="Settings">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                <a href="#" class="toggle" data-target="profileDD">
                    <div class="user-avatar">
                        <span>AB</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown" data-content="profileDD">
                    <div class="dropdown-inner user-card-wrap d-none d-md-block">
                        <div class="user-card">
                            <div class="user-avatar">
                                <span>AB</span>
                            </div>
                            <div class="user-info">
                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                <span class="sub-text text-soft">info@softnio.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                            </li>
                            <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                            </li>
                            <li><a href="html/user-profile-activity.html"><em
                                            class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>