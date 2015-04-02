<!-- -->
<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="/assets/monitor_musical_icon.png" alt="monitor musical logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            @if(Auth::user())
            <li><a href="/categories">Categorias</a></li>
            <li><a href="/genres">Genres</a></li>
            <li><a href="/artists">Artists</a></li>
            <li><a href="/products">Albums</a></li>
            @endif
            
          </ul>


           <ul class="nav navbar-nav navbar-right">
            <!-- If not loged tha show options -->
          <li>@if(Auth::user()==false)
            <li><a href="/register" > Register</a></li>
            <li><a href="/login" > Login</a></li>
              @else
            <li> <a href="/profiles">Perfil: {{Auth::user()->username}}</a></li>
            <li><a href="/logout"> Logout </a></li>
              @endif
            </ul>
        </div><!-- /.navbar-collapse -->


      </div><!-- /.container-fluid -->
    </nav>