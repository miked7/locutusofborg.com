<!DOCTYPE html>
<html>
   <head>
      <link rel="import" href="./header.html">
      <title>F1 2013 Setups</title>
   </head>
   <body>

      <script>
         $(document).ready(function()
         {
            $('.carSetupForm').bootstrapValidator({
                 message: 'This value is not valid',
                 feedbackIcons: {
                     valid: 'glyphicon glyphicon-ok',
                     invalid: 'glyphicon glyphicon-remove',
                     validating: 'glyphicon glyphicon-refresh'
                 },
                 fields: {
                     formLapTimeMinuteSecond: {
                         message: 'The time is not valid',
                         validators: {
                             notEmpty: {
                                 message: 'The time is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^\d+.\d+:\d+$/,
                                 message: 'The username must be of the format m.SS:sss'
                             }
                         }
                     }
                 }
             });
         });
      </script>
      
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="./index.html">F1 2013 Setups</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="active">
                     <a href="./index.html">Home</a>
                  </li>
                  <li>
                     <a href="./test.php">Submit a Setup</a>
                  </li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </nav>
      
      <div class="container">
      
         <!-- Main hero unit for a primary marketing message or call to action -->
         <div class="jumbotron">
           <h1>PHP</h1>
         </div>
         
        <form class="carSetupForm" id="carSetupForm" role="form" action="./f1-2014-setup-car.php" method="post">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                      <label for="formCircuit">Circuit</label>
                      <select class="form-control" name="formCircuit">
                          <option>Melbourne</option>
                          <option>Sepang</option>
                          <option>Shanghai</option>
                          <option>Bahrain</option>
                          <option>Catalunya</option>
                          <option>Monaco</option>
                          <option>Gilles Villeneuve</option>
                          <option>Silverstone</option>
                          <option>Nürburgring</option>
                          <option>Hungaroring</option>
                          <option>Spa-Francorchamps</option>
                          <option>Monza</option>
                          <option>Singapore</option>
                          <option>Yeongam</option>
                          <option>Suzuka</option>
                          <option>Buddh</option>
                          <option>Yas Marina</option>
                          <option>Austin</option>
                          <option>São Paulo</option>
                      </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                        <label for="formLapTimeMinuteSecond">Time</label>
                        <input type="text" class="form-control" id="formLapTimeMinuteSecond" name="formLapTimeMinuteSecond" placeholder="e.g. 1.23:456">
                  </div>
               </div>
            </div>
            <button type="submit" class="btn btn-default" name="formSubmit" value="Submit">Submit</button>
        </form>

         <hr>

         <footer>
           <p>&copy; Michael Thompson 2014</p>
         </footer>

    </div> <!-- /container -->

   </body>
</html>