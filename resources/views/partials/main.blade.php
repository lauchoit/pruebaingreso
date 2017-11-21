<!DOCTYPE html>
<html lang="">
	@include('partials.head')
    <body>
    	<div class="container continer-main">
	    	<div class="row">
	    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 colorCabecera">
	    			<div class="text-center">
	    				<h2>Este es el ejemplo que debe realizar</h2>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row separacion">
	    		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	    			@include('partials.navbar')
	    		</div>
	    		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	    			<h2 class="text-center" >@yield('encbezado')</h2>
	        		@yield('cuerpo')
	    		</div>
	    	</div>
    	</div>
    </body>
	@include('partials.footer')
</html>