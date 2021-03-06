<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">SUWDC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('members.index')}}">Our Members</a>
            </li>
            <li>
                <a href={{route('mission')}}>Our Mission</a>
            </li>
            <li>
                <a href="#">Schedule/News</a>
            </li>
            <li>
                <a href="#">Discuss</a>
            </li>
            <li>
                <a href="#">Learn</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{route('members.create')}}">Sign Up</a>
            </li>
            <li>
                <a href={{route('login')}}>Log In</a>
            </li>
        </ul>
    </div>
</nav>