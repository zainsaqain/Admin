<!-- Add this line in the <head> section of your HTML file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-1M+9CkfdTRJ0O5N6fGqz8N0A5/UR1zEuZwUzQrSYN8e/OzeG2wOxP+/6R9lzgW0f/dDzmiUlv1HgsvANzLXp3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li class="mt-5">
                    {{-- <a  href="{{ route('dashboard') }}" class=""> --}}
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-cog"></i>
                        <span>Services</span>
                    </a>
                    
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.create') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Create Services</a></li> 

                        <li>
                            <a href="{{ route('services.index') }}">
                                <i class="mdi mdi-checkbox-blank-circle align-middle"></i> Show Services
                            </a>
                        </li>
                        
                    </ul>
                </li>

                 <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-briefcase"></i>
                        <span>PortFolios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('portfolios.create') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Create PortFolios</a></li> 

                     <li><a href="{{ route('portfolios.index') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Show PortFolios</a></li>

                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-briefcase"></i>
                        <span>Teams</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('teams.create') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Create Teams</a></li> 

                     <li><a href="{{ route('teams.index') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Show Teams</a></li>

                    </ul>
                </li>
               
            </ul>
        </div>

        <!-- Sidebar -->
    </div>
</div>