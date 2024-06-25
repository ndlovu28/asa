<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(Auth::user()->role->name == "admin")
                    <li>
                        <a class="waves-effect waves-dark" href="{{ url('dashboard') }}" aria-expanded="false">
                            <i class="icon-speedometer"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-envelope-open"></i>
                            <span class="hide-menu">Athletes</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ url('athletes/list') }}">Lists All Athletes</a></li>
                            <li><a href="{{ url('athletes/form') }}">Create New Athlete</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-envelope-open"></i>
                            <span class="hide-menu">Coaches</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ url('coaches/list') }}">Lists All Coaches</a></li>
                            <li><a href="{{ url('coaches/form') }}">Create New Coach</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-envelope-open"></i>
                            <span class="hide-menu">Representatives</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ url('representatives/list') }}">Lists Reps</a></li>
                            <li><a href="{{ url('representatives/form') }}">Create Rep</a></li>
                        </ul>
                    </li>
                    <li> 
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-envelope-open"></i>
                            <span class="hide-menu">Clubs</span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{ url('clubs/list') }}">Lists All Clubs</a></li>
                            <li><a href="{{ url('clubs/form') }}">Create New Club</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>