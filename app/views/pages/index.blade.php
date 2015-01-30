@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-md-9"><img src="{{asset('/portada.jpg')}}" alt="D & O Records" class="thumbnail img-responsive">
</div>
  <div class="col-md-3">
    <div class="well">
 <h1>Monitor de  contenido audio video</h1>
<h4>Artistas, Casas Disqueras, Seminaristas, Audio Libros y creadores de audio contenido.</h4>
<p><strong>Sistema de monitoreo para audio videos Youtube, Vevo, Vimeo y Facebook</strong></p>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#presentacion">
  Presentación
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#tech">
  Nuestra Tecnología
</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#contacto">
  Contacto
</button>
</div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade" id="presentacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Presentación Logística</h1>
      </div>
      <div class="modal-body">
<h1>Cresimento Linear</h1>
<img src="{{asset('/ejemplo1.jpg')}}" alt="Cresimiento Linear" class="thumbnail img-responsive">
<p>En este ejemplo el crecimiento potencial en la plataforma como youtube solo es equivalente a el numero de Audio Tracks que es poseido. El proceso es sencillo y fácilmente capturado con visitas.</p>

<div class="row">
  <div class="col-md-6"><img src="http://skinnyartist.com/wp-content/uploads/2010/08/exponential-growth-linear1-300x232.png" alt="linear growth"></div>
  <div class="col-md-6"><h4>Gráfica Cresimiento Linear</h4><p><strong>Linea roja</strong> representa el cresimiento simple y linear</p></div>
</div>

<hr>


<h1>Cresimento Exponencial</h1>
<img src="{{asset('/ejemplo2.jpg')}}" alt="" class="thumbnail img-responsive">
<p>El crecimiento exponencial en la plataforma como youtube es auto generado en forma Lyrics, Remixes, Karaoke y otros usos.</p>

<div class="row">
  <div class="col-md-6"><img src="http://skinnyartist.com/wp-content/uploads/2010/08/exponential-growth-linear1-300x232.png" alt="linear growth"></div>
  <div class="col-md-6"><h4>Gráfica Cresimiento Exponencial</h4><p><strong>Linea Azul</strong> representa el cresimiento acelerado organico.</p></div>
</div>

<hr>


<h1>Cresimiento Explosivo</h1>
<img src="{{asset('/ejemplo3.jpg')}}" alt="" class="thumbnail img-responsive">
<p>El Crecimiento Explosivo es expandido con las múltiples plataformas de distribución como Youtube, Vimeo, Vevo y Facebook.</p>

<div class="row">
  <div class="col-md-6"><img src="http://skinnyartist.com/wp-content/uploads/2010/08/exponential-growth-linear1-300x232.png" alt="linear growth"></div>
  <div class="col-md-6"><h4>Gráfica Cresimiento Explosivo</h4><p><strong>Linea Verde</strong> representa el cresimiento explosivo.</p></div>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="myModalLabel">Contacto</h1>
      </div>
      <div class="modal-body">
<address>
  <strong>Monitor Musical LLC</strong><br>
  1227 Lincoln Ave<br>
  Pasadena, CA 91103<br>
  <abbr title="Phone">P:</abbr> (818) 310-3652
</address>

<address>
  <strong>Mario Uvera</strong><br>
  Account Manager <br>
  <a href="mailto:monitormusical1@gmail.com">monitormusical1@gmail.com</a>
</address>



      <p>(Seup fee de base inicial: $500 mas cargos extras de consulta) Companias que requieran digitalización y base de datos</p>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>

<hr>

<center>
<h1><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"> Ejemplo</span>  </h1>
</center>

<hr>

<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-6"><h2>Reporte de Album: <small>No me se Rajar</small></h2></div>
          <div class="col-md-6">       <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a class="btn btn-default" href="#" role="button">300 Albums</a> <a class="btn btn-default" href="#" role="button">3,420 Tracks</a> <a class="btn btn-default" href="#" role="button">55,345,250 Visitas</a>   </div>
        </div>

   <br>
      <strong>Album: Empresa > Univision > Regional > Banda > El Recodo > No me se Rajar</strong>
      
      </div>



      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Album</th>
            <th>Video Tracks</th>
            <th>Servicio</th>
            <th>Tipo</th>
            <th>Visitas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
              </td>
            <td>13</td>
            <td>
              <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/youtube.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-music" aria-hidden="true"> Audio</span> </td>
            <td>12,589</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
             <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
            </td>
            <td>13</td>
            <td>
                            <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vevo.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-music" aria-hidden="true"> Audio</span> </td>
            <td>69,484</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">             
            </td>
            <td>13</td>
            <td>
                          <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vimeo.jpg" alt="youtube" width="50">  
            </td>
            <td><span class="glyphicon glyphicon-music" aria-hidden="true"> Audio</span> </td>
            <td>278,000</td>
          </tr>


                   <tr>
            <th scope="row">4</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
              </td>
            <td>13</td>
            <td>
              <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/youtube.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-font" aria-hidden="true"> Lyrics</span></td>
            <td>12,589</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
             <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
            </td>
            <td>13</td>
            <td>
                            <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vevo.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-font" aria-hidden="true"> Lyrics</span></td>
            <td>69,484</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">             
            </td>
            <td>13</td>
            <td>
                          <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vimeo.jpg" alt="youtube" width="50">  
            </td>
            <td><span class="glyphicon glyphicon-font" aria-hidden="true"> Lyrics</span></td>
            <td>278,000</td>
          </tr>


                   <tr>
            <th scope="row">7</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
              </td>
            <td>13</td>
            <td>
              <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/youtube.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-text-background" aria-hidden="true"> Karaoke</span></td>
            <td>12,589</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>
             <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">
            </td>
            <td>13</td>
            <td>
                            <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vevo.jpg" alt="youtube" width="50">
            </td>
            <td><span class="glyphicon glyphicon-text-background" aria-hidden="true"> Karaoke</span></td>
            <td>69,484</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>
              <img src="http://ecx.images-amazon.com/images/I/61BPyhM5yKL.jpg" alt="No me se rajar" class="img-responsive" width="50">             
            </td>
            <td>13</td>
            <td>
                          <img src="http://storage.googleapis.com/monitormusical/site-images/videosites/vimeo.jpg" alt="youtube" width="50">  
            </td>
            <td><span class="glyphicon glyphicon-text-background" aria-hidden="true"> Karaoke</span></td>
            <td>278,000</td>
          </tr>

          <tr>
            <th scope="row"></th>
            <td>

          </td>
            <td><strong>Video Tracks:</strong> 117</td>
            <td>
          <strong>Servisios: 3</strong>
            </td>
            <td>
              <strong>Tipos: 3</strong>
            </td>
            <td>
              <strong>Total: 1,080,219</strong>
            </td>
          </tr>


        </tbody>
      </table>
    </div>







@stop

  

     