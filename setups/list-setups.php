<!DOCTYPE html>
<html>
   <head>
      <link rel="import" href="./header.html">
      <title>F1 2013 Setups - List</title>
   </head>
   <body>

      <script>
         $(document).ready(function()
         {
            $('#nav-page-list').addClass('active');
         });

      </script>

      <?php include 'nav-bar.html'; ?>
      
      <div class="container">
      
         <!-- Main hero unit for a primary marketing message or call to action -->
         <div class="jumbotron" style="background-image: url(../img/jumbo-f1-2013-setups-add.png);">
         </div>
         
         <form class="setupSearchForm section rounded-corner" name="setupSearchForm" id="setupSearchForm" role="form" method="post" action="query-setups.php" style="background-color: #87D37C;">  
             <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="circuit">Circuit</label>
                        <select class="form-control" name="circuit">
                            <option>Melbourne</option>
                            <option>Sepang</option>
                            <option>Shanghai</option>
                            <option>Bahrain</option>
                            <option>Catalunya</option>
                            <option>Monaco</option>
                            <option>Gilles Villeneuve</option>
                            <option>Silverstone</option>
                            <option>Nurburgring</option>
                            <option>Hungaroring</option>
                            <option>Spa-Francorchamps</option>
                            <option>Monza</option>
                            <option>Singapore</option>
                            <option>Yeongam</option>
                            <option>Suzuka</option>
                            <option>Buddh</option>
                            <option>Yas Marina</option>
                            <option>Austin</option>
                            <option>Sao Paulo</option>
                        </select>
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="formConstructor">Constructor</label>
                        <select class="form-control" name="constructor">
                            <option>Red Bull Racing-Renault</option>
                            <option>Mercedes</option>
                            <option>Ferrari</option>
                            <option>Lotus-Renault</option>
                            <option>McLaren-Mercedes</option>
                            <option>Force India-Mercedes</option>
                            <option>Sauber-Ferrari</option>
                            <option>STR-Ferrari</option>
                            <option>Williams-Renault</option>
                            <option>Marussia-Cosworth</option>
                            <option>Caterham-Renault</option>
                      </select>
                   </div>
                </div>
             </div>
             <button type="submit" class="btn btn-default" name="formSubmit" id="searchSetups" value="searchSetups">Search</button>
         </form>

         <script>

            $( "#setupSearchForm" ).submit(function( event )
            {

               // Stop form from submitting normally
               event.preventDefault();

               // Get some values from elements on the page:
               var $form = $( this ),
               circuitVal = $form.find( "select[name='circuit']" ).val(),
               constructorVal = $form.find( "select[name='constructor']" ).val(),
               url = $form.attr( "action" );

               // Send the data using post
               var posting = $.post( url, { _circuit: circuitVal, _constructor: constructorVal } );

               // Put the results in a div
               posting.done(function( response )
               {
                  $( "#setup-list" ).html( response );
               });

               posting.fail(function()
               {
               });

               posting.always(function()
               {
               });
            });

         </script>
         
         <div class="section rounded-corner" style="background-color: #05beff;">
            <div class="row">
               <div class="col-md-12">
                  <div class="list-group" id="setup-list">
                     <input type="button" data-name="hide" value="Toggle" id="toggle">
                  </div>
               </div>
            </div>
            <div id="expand_test" style="height: 0px; height: 0px;">
            </div>
        </div>

         <script>

            $("#toggle").click(function () {
               if ($(this).data('name') == 'show')
               {
                  $("#expand_test").animate(
                  {
                     height: '0px'
                  });
                  
                  $(this).data('name', 'hide')
               }
               else
               {
                  $("#expand_test").animate(
                  {
                     height: '200px'
                  });

                  $(this).data('name', 'show')
               }
            });

         </script>

        <footer>
        <p>&copy; Michael Thompson 2014</p>
        </footer>

        </div> <!-- /container -->

   </body>
</html>