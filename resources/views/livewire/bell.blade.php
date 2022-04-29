<div>
    <ul>
        <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">              
                <i class="icon-bell"></i>
                 @if ($user->notifications->where('estado','nonread')->count()>0)
                    <span class="count">{{$user->notifications->where('estado','nonread')->count()}}</span>
                @endif             
            </a>
        </li>
    </ul>
</div>
