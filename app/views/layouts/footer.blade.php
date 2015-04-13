<!-- -->
<div class="row">
  <div class="col-md-8">

  </div>
  <div class="col-md-4 pull-right">

      @if(Auth::user())
   <!--    Only Members -->
      @if(Auth::user()->roles()->first()->name == 'member')

      @endif
  <!--  Only Customers -->
       @if(Auth::user()->roles()->first()->name == 'customer')
       @include('layouts.menu.customer.index')
      @endif

    @else
    <!-- Only Guests -->
      @include('layouts.menu.guest.index')
  @endif
<br>

    
    @if(Session::get('products'))
<a href="/cart" class="btn btn-primary btn-block"></span>  Ver tus {{count(Session::get('products'))}} temas.</a>
    @endif
@if(Auth::user())
    @if(Session::get('products'))
{{Form::open(['route'=>'orders.store'])}}
<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-shopping-cart"></span>  Checkout</button>
{{Form::close()}}
    @endif
@endif
  </div>
</div>


