
<div class="sidenav">
    <h4 class="logo"><span class="blue">T</span>UR|<span class="blue">B</span>ER</h4>
    <i class="ion ion-ios-contact"></i>
    <p class="logged_as">{{ Auth::user()->name }}<br><i>- {{ Auth::user()->type }} -</i></p>
    <ul>
        <a href="/posts"><li class="{{ request()->is('posts') ? 'active' : '' }}"><i class="ion ion-ios-list"></i>Posts</li></a>
        <a href="/agencies"><li class="{{ request()->is('agencies') ? 'active' : '' }}"><i class="ion ion-ios-home"></i>Agencies</li></a>
        <a href="/tourguides"><li class="{{ request()->is('tourguides') ? 'active' : '' }}"><i class="ion ion-ios-people"></i>Tourguides</li></a>
        <a href="/posts/create"><li class="{{ request()->is('posts/create') ? 'active' : '' }}">Create a Post</li></a>
    </ul>
    <a href="/logout" class="logout">Logout</a>
</div>