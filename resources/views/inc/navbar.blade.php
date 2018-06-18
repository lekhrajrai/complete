
<nav class="navbar navbar-expand-md bg-success ">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="images/logo.png" height="70px" width="70px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            
            <!-- Left Side Of Navbar -->
           
			<ul class="navbar-nav mr-auto ml-auto" id="nav-right">
		      <li class="nav-item active">
		        <a class="nav-link" href="/">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about">About</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="hobbies">Hobbies</a>
		      </li>
		      
		      <li class="nav-item">
		        <a class="nav-link " href="contact">Contact</a>
		      </li>
		    </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav float-right">
                <!-- Authentication Links -->
                @guest
                    <li><a class="btn btn-md bg-info mr-3" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="btn btn-md bg-info mr-3" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ 'Welcome '.Auth::user()->name}} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="/dashboard">
                                {{ __('Dashboard') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

</nav>

<!-- modal -->
<div class="modal fade " id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 

    <div class="modal-dialog" id="ModalBody" role="document"> 

    </div> 
</div>
<!-- modal ends -->