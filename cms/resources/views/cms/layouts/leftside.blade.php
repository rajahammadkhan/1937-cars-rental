<div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <ul class="navbar-nav theme-brand flex-row  text-center" style="background-color: #0e1726;">
                    <li class="nav-item theme-text">
                        <a href="{{route('dashboard')}}" class="nav-link"> <img src="{{url('')}}/uploads/1937_logo.png" class="navbar-logo" alt="logo" width="155px" height="40px"> </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">
                    @can('DashBoard')
                    <li class="menu {{ (request()->segment(1) == 'dashboard' ) ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"  aria-expanded="false" class="dropdown-toggle">
                            <div >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>
                    @endcan
                    <li class="menu ">
                        <a href="#all-vehicles" data-active="false" data-toggle="collapse" aria-expanded="" class="dropdown-toggle collapsed">
                            <div class="">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                    <span>All Vehicles</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="all-vehicles" data-parent="#accordionExample" style="">
                        
                            <li class="">
                                <a  href="{{ route('brands') }}"> Brands </a>
                            </li>
                            <li class="">
                                <a href="{{ route('vehicles') }}"> Vehicles  </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="{{ route('other_pages') }}"  class="dropdown-toggle">
                            <div >
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#blogs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>      
                                 <span>Blogs</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="blogs" data-parent="#accordionExample" style="">
                            <li>
                                <a  href="{{route('blog')}}"> Blogs </a>
                            </li>
                        </ul>
                    </li>

                    
                    
                   <!-- @can('Master Files')
                    <li class="menu">
                        <a href="#master-files" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>         
                                 <span>Master Files</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="master-files" data-parent="#accordionExample" style="">
                            @can('MF-Our Services')
                            <li>
                                <a href="{{ route('mf_our_service') }}"> Our Services </a>
                            </li>
                            @endcan
                            @can('MF-Visa Services')
                            <li>
                                <a href="{{ route('mf_visa_service') }}"> Visa Services </a>
                            </li>
                            @endcan
                            @can('MF-LLC Company Formation')
                            <li>
                                <a href="{{ route('mf_llc_company_formation') }}"> LLC Company Formation </a>
                            </li>
                            @endif
                            @can('MF-Business Setup')
                            <li>
                                <a href="{{ route('mf_business_setup') }}"> Business Setup </a>
                            </li>
                            @endcan
                           
                        </ul>
                    </li>
                    @endcan
                    @can('Site Management')
                    <li class="menu">
                        <a href="#site-management" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>      
                                 <span>Site Management</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="submenu list-unstyled collapse" id="site-management" data-parent="#accordionExample" style="">
                            @can('SM-Our Services')
                            <li>
                                <a  href="{{ route('our_service') }}"> Our Services </a>
                            </li>
                            @endcan
                            @can('SM-Visa Services')
                            <li>
                                <a  href="{{ route('visa_service') }}"> Visa Services </a>
                            </li>
                            @endcan
                            @can('SM-LLC Company Formation')
                            <li>
                                <a  href="{{ route('llc_company_formation') }}"> LLC Company Formation </a>
                            </li>
                            @endcan
                            @can('SM-Business Setup')
                            <li>
                                <a  href="{{ route('business_setup') }}"> Business Setup </a>
                            </li>
                            @endcan
                            @can('Other Pages')
                            <li>
                                <a  href="{{ route('other_pages') }}"> Other Pages </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan -->
                     
                    <li class="menu">
                        <a href="{{route('seo')}}" class="dropdown-toggle">
                            <div >
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                <span>SEO</span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="menu">
                        <a href="{{ route('settings') }}"  class="dropdown-toggle">
                            <div >
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                <span>Settings</span>
                            </div>
                        </a>
                    </li>  -->
                    
                    <li class="menu">
                        <a href="{{ route('settings') }}"  class="dropdown-toggle">
                            <div >
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                <span>Settings</span>
                            </div>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>