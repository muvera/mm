<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addtrack">
  New Track
</button>


<!-- Modal -->
<div class="modal fade" id="addtrack" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a New Track</h4>
      </div>
      <div class="modal-body">
  {{Form::open(['route'=>'tracks.store'])}} 

 {{Form::hidden('product_id', $product->id)}}
 {{Form::hidden('artist_id', $product->artist()->first()['id'])}}  


    <!-- track -->
<div class="form-group">
{{ Form::label('track', 'Track') }}
<select name="track_number">
  
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
   <option value="21">21</option>
    <option value="22">22</option>
</select>
</div>

      <!-- Name -->
  <div class="form-group">
      {{ Form::label('Name', 'Name:') }}
      {{ Form::text('name', null, ['class'=>'form-control']) }}
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Track</button>
      </div>
    </div>
  </div>
</div>
{{Form::close()}}