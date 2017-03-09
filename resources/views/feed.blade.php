@extends('layouts.app')

@section('content')

    <div class="container" >
      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="images/hacksaw.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
              <!--  <h1>Example headline.</h1>
                <p>
              --> <p>La película cuenta la historia de Desmond Doss, interpretado por Andrew Garfield,
              un hombre contrario a la violencia que se alista en el ejército estadounidense para servir como médico en la II Guerra Mundial.<p><a class="btn btn-lg btn-default" href="#" role="button">Ver Reseña</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="images/logan.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
            <!--    <h1>Another example headline.</h1>
            <p>-->   <p>Año 2024. La población mutante se ha visto drásticamente reducida y los X-Men se han visto obligados a separarse. Logan, cuyos poderes de regeneración se han debilitado,
             ha caído en el alcohol y se encarga de cuidar al anciano y enfermo Profesor X. <p><a class="btn btn-lg btn-default" href="#" role="button">Ver Reseña</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="images/bandb.jpeg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
            <!--    <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          -->  <p>Una joven soñadora y romántica llamada Bella (Emma Watson) vive en una pequeña aldea junto a su padre,
           un inventor de artilugios, al que algunos consideran un anciano demente. Un día, su padre viaja a una feria para exponer sus inventos, 
          pero se pierde en el camino y acaba en un viejo y misterioso castillo.</p>
          <a class="btn btn-lg btn-default" href="#" role="button">Ver Reseña</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->
    </div><!-- /.container -->
@endsection