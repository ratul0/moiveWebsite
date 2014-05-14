<div class="navbar navbar-default">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        
       </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
          

                @if(Auth::check())
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        

                      </ul>
                    </li>
                   

                    
                    @endif
                    
                    
          
        </ul>
          <ul class="nav navbar-nav navbar-right">
            
             @if(!Auth::check())
                    
                    
                    <li>{{ HTML::linkRoute('login','Login') }}</li>
                    @else

                      @if(Session::get('role') == 1)
                        <li><a href="#">Admin</a></li>
                        
                      @endif
                      @if(Session::get('role') == 2)
                        <li><a href="#">User</a></li>
                        
                      @endif
                        
                       <li>{{ HTML::linkRoute('logout','Logout ('.Auth::user()->username.')') }}</li> 
                    @endif
        </ul>
      </div>
    </div>