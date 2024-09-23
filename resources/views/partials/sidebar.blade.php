<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #294165;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Dashboard -->
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    Dashboard
                </a>

                <!-- Childs -->
                <a class="nav-link collapsed {{ request()->is('families/*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseChild" aria-expanded="true"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-child"></i></div>
                Manage Children
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('families*') || request()->is('childs*') ? 'show' : '' }}"
                    id="collapseChild" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('volunteers') ? 'active' : '' }}" href="/families">Families
                        </a>

                        <a class="nav-link {{ request()->is('attendance*') ? 'active' : '' }}" href="/child">Children</a>


                    </nav>
                </div>
                <!-- Volunteers -->
                <a class="nav-link collapsed {{ request()->is('volunteers/*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseVolunteer" aria-expanded="true"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-person"></i></div>
                    Manage Volunteers
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('volunteers*') || request()->is('attendance*') ? 'show' : '' }}"
                    id="collapseVolunteer" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('volunteers') ? 'active' : '' }}"
                            href="/volunteers">Volunteers </a>

                        <a class="nav-link {{ request()->is('attendance*') ? 'active' : '' }}"
                            href="/attendance">Attendances</a>
                        <!-- <a class="nav-link {{ request()->is('attendance/create*') ? 'active' : '' }}"
                            href="/attendance/create">Record Attendances</a> -->


                    </nav>
                </div>

                <!-- Events -->
                <a class="nav-link collapsed {{ request()->is('events/*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseEvent" aria-expanded="true"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar-days"></i></div>
                    Manage Events
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('events*') || request()->is('event-participants*') ? 'show' : '' }}"
                    id="collapseEvent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}" href="/events">Events </a>
                    </nav>
                </div>
                <!-- Membership -->
                <a class="nav-link collapsed {{ request()->is('members/*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseMembers" aria-expanded="true"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-person"></i></div>
                    Manage Members
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('members*') || request()->is('donations*')||request()->is('donation-types*')  ? 'show' : '' }}"
                    id="collapseMembers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('events') ? 'active' : '' }}" href="/members">Members</a>


                        <a class="nav-link {{ request()->is('donations*') ? 'active' : '' }}"
                            href="/donations">Donations</a>


                    </nav>
                </div>


                <!-- Users -->
                <a class="nav-link collapsed {{ request()->is('users/*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true"
                    aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    Manage Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ request()->is('users*') || request()->is('roles*')  ? 'show' : '' }}"
                    id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="/users">Users </a>

                        <a class="nav-link {{ request()->is('roles*') ? 'active' : '' }}" href="/roles">Role</a>


                    </nav>
                </div>


                <!-- manage programs -->
                  
                <a class="nav-link {{ request()->is('grades*') || request()->is('origins*') || request()->is('bag_types*') || request()->is('coffee_types*') ? 'active' : '' }}"
                    href="/programs">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-diagram-predecessor"></i></div>
                    Manage Programs
                </a>

                <!-- subsidized form -->
                <a class="nav-link {{ request()->is('subsidized-forms') ? 'active' : '' }}" href="/subsidized-forms">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                    Subsidized Form
                </a>
                <!-- Settings -->

            
                <a class="nav-link {{ request()->is('grades*') || request()->is('origins*') || request()->is('bag_types*') || request()->is('coffee_types*') ? 'active' : '' }}"
                    href="/settings">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Settings
                </a>
           
                


                <div class="container mb-4 mt-4">
                    <p>Logged As: {{ Auth::guard('web')->user()->first_name }} {{ Auth::guard('web')->user()->last_name }}
                    </a> </p>
                </div>


            </div>
        </div>
    </nav>
</div>