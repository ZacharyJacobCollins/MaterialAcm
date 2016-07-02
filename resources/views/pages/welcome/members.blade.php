<!-- Members tab -->
  <div id="members" class="col s12">

        <!-- Banner -->    
        <div class="section no-pad-bot black" id="index-banner">
          <div class="container">
            <h1 class="header center white-text text-darken-4">Our Members</h1>
          </div>
        </div>

        <!-- Member cards --> 
        @for($j=0; $j<3; $j++)
          <div class="row">
            @for($i=0; $i<4; $i++)
              <!-- Card -->
              <div class="card grey darken-2 col s3">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/toledo.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Jeremy Karbowski with EEEE<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Jeremy Karbowski with EEEE<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                  </div>
              </div>
              @endfor
          </div>
        @endfor
</div>
