<form id="paypal_checkout" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="upload" value="1" />			
<input type="hidden" name="no_note" value="0" />						
<input type="hidden" name="bn" value="PP-BuyNowBF" />					
<input type="hidden" name="tax" value="0" />			
<input type="hidden" name="rm" value="2" />


		<input type="hidden" name="business" value="muvera-facilitator@gmail.com" />
		<!-- Handing amount is set here -->
      <!--  <input type="hidden" name="handling_cart" value="1.99" /> -->
       <input type="hidden" name="currency_code" value="USD" />
       <input type="hidden" name="lc" value="US" />
        <input type="hidden" name="invoice" value="{{$order->id}}" />
       <input type="hidden" name="return" value="http://monitormusical.com/order_confirmation/{{$order->id}}/{{$order->verify}}" />			
       <input type="hidden" name="cbt" value="Download Now!, Descargar Musica Ahora!" />
       <input type="hidden" name="cancel_return" value="http://monitormusical.com/orders" />
<hr>

       <!-- foreach loop starts -->
       <div id="item_1" class="itemwrap">
       	       <?php 
                   $sum = 0; 
                   $option_loop = 1; 
                   $products = unserialize($order->products);
                   ?>
                   
@foreach($products as $key => $product)

			<!-- product name -->
			<input type="hidden" name="item_name_{{$option_loop}}" value="{{$product['name']}}"/>

			<!-- Product Quantity -->
		<input type="hidden" name="quantity_{{$option_loop}}" value="1" />

            <input type="hidden" name="tax_$option_loop" value="0.10" />
			<!-- Total Cost -->
			<input type="hidden" name="amount_{{$option_loop}}" value="{{$sum + 0.99}}" />

<?php $option_loop++; ?>
@endforeach
            
            
            
         </div>
      <!--  foreach loop ends -->


<button class="btn btn-success btn-block btn-lg" type="submit">Pagar Downloads con Paypal</button>
</form>