<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="https://pizzaend.com.bd/">

				<img src="{{asset('frontend/img/logo.png')}}" width="130px" height="60px;">
			</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{url('/#services')}}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="#contacts" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	     <a href="{{route('cart.list')}}" style="color:#fac564;margin-top:1.5%;">
	         <p style="color:#fac564;" id="cargo_link_btn">Cart({{count(Cart::content())}})</p></a>
		  </div>
	  </nav>
