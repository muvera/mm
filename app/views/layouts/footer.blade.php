<!-- -->
<div class="row">
  <div class="col-md-8">
      @if(Auth::user())
   <!--    Only Members -->
      @if(Auth::user()->roles()->first()->name == 'member')
       @include('layouts.nav')
      @endif
  <!--  Only Customers -->
       @if(Auth::user()->roles()->first()->name == 'customer')
       @include('layouts.menu.customer.index')
      @endif

    @else
    <!-- Only Guests -->
      @include('layouts.menu.guest.index')
  @endif

  </div>
  <div class="col-md-4 pull-right">
    @if(Session::get('products'))
<a href="/cart" class="btn btn-default btn-block"></span>  Ver tus {{count(Session::get('products'))}} temas.</a>
    @endif

    @if(Session::get('products'))
{{Form::open(['route'=>'orders.store'])}}
<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-shopping-cart"></span>  Checkout</button>
{{Form::close()}}
    @endif

  </div>
</div>


