<!--begin::Menu-->
<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
    <div class="menu-item">
        <div class="menu-content pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{trans('sidebar.Dashboard')}}</span>
        </div>
    </div>
    <div class="menu-item">
        <a class="menu-link  {{ (Request::route()->getName() == 'home') ? 'active' : '' }}" href="{{route('home')}}">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
            <span class="menu-title">{{trans('sidebar.main')}}</span>
        </a>
    </div>
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="bi bi-people fs-3"></i>
                                                </span>
                                                <span class="menu-title">{{trans('sidebar.user_manger')}}</span>
                                                <span class="menu-arrow"></span>
                                            </span>
        <div class="menu-sub menu-sub-accordion">
                          <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link  {{ (Request::route()->getName() == 'users.index') ? 'active' : '' }}" href="{{route('users.index')}}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                            <span class="menu-title">{{trans('sidebar.users-list')}}</span>
                        </a>
                    </div>
                              <div class="menu-item">
                                  <a class="menu-link {{ (Request::route()->getName() == 'roles.index') ? 'active' : '' }}" href="{{route('roles.index')}}">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                      <span class="menu-title">{{trans('sidebar.roles-list')}}</span>
                                  </a>
                              </div>

                </div>
            </div>


    </div>
    <div class="menu-item">
        <a class="menu-link" href="{{route('empty')}}">
                                                <span class="menu-icon">
                                                    <i class="bi bi-sliders"></i>
                                                </span>
            <span class="menu-title">{{trans('sidebar.site_manger')}}</span>
        </a>
    </div>
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
        </div>
    </div>

</div>
<!--end::Menu-->
