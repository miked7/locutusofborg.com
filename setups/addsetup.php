<!DOCTYPE html>
<html>
   <head>
      <link rel="import" href="./header.html">
      <title>F1 2013 Setups - Add</title>
   </head>
   <body>

      <script>
         $(document).ready(function()
         {         
            $('#nav-page-add').addClass('active');
         
            $( "#formBrakeBalanceFront" )
            .focusout(function()
            {
               $( "#formBrakeBalanceRear" ).val( 100 - $( "#formBrakeBalanceFront" ).val() );
            });
            
            $( "#formBrakeBalanceRear" )
            .focusout(function()
            {
               $( "#formBrakeBalanceFront" ).val( 100 - $( "#formBrakeBalanceRear" ).val() );
            });
         
            $('.carSetupForm').bootstrapValidator({
                 message: 'This value is not valid',
                 feedbackIcons: {
                     valid: 'glyphicon glyphicon-ok',
                     invalid: 'glyphicon glyphicon-remove',
                     validating: 'glyphicon glyphicon-refresh'
                 },
                 fields: {
                     formLapTimeMinuteSecond: {
                         message: 'The time is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The time is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^\d+.\d+:\d+$/,
                                 message: 'The time must be of the format m.SS:sss'
                             }
                         }
                     },
                     formAeroFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formAeroRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formBrakeBalanceFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([0-9]|[1-9][0-9]|(100))$/,
                                 message: 'The must range from 0 - 100.'
                             }
                         }
                     },
                     formBrakeBalanceRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([0-9]|[1-9][0-9]|(100))$/,
                                 message: 'The must range from 0 - 100.'
                             }
                         }
                     },
                     formBalanceRollFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formBalanceRollRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formSuspensionHeightFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formSuspensionHeightRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formSuspensionSpringFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formSuspensionSpringRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([1-9]|(10)|(11))$/,
                                 message: 'The must range from 1 - 11.'
                             }
                         }
                     },
                     formGearbox1: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox2: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox3: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox4: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox5: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox6: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formGearbox7: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$/,
                                 message: 'The must range from 0 - 255.'
                             }
                         }
                     },
                     formAlignmentCamberFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^-(3\.[0-5])|(2\.[5-9])$/,
                                 message: 'The must range from -3.5 - -2.5.'
                             }
                         }
                     },
                     formAlignmentCamberRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^-(1\.[0-5])|(0\.[5-9])$/,
                                 message: 'The must range from -1.5 - -0.5.'
                             }
                         }
                     },
                     formAlignmentToeFront: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^0\.(0+[5-9])|[10-15]$/,
                                 message: 'The must range from 0.05 - 0.15.'
                             }
                         }
                     },
                     formAlignmentToeRear: {
                         message: 'The value is not valid.',
                         validators: {
                             notEmpty: {
                                 message: 'The value is required and cannot be empty.'
                             },
                             regexp: {
                                 regexp: /^0\.(20)|(23)|(26)|(29)|(32)|(35)|(38)|(41)|(44)|(47)|(50)$/,
                                 message: 'The must range from 0.20 - 0.50.'
                             }
                         }
                     }
                 }
             });
         });   
      
      </script>

      <?php include 'nav-bar.html'; ?>

      <div class="container">
      
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-image: url(../img/jumbo-f1-2013-setups-add.png);">
      </div>
         
      <form class="carSetupForm section rounded-corner" id="carSetupForm" role="form" action="./f1-2014-setup-car.php" method="post" style="background-color: #05beff;">

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
                  <label for="formLapTimeMinuteSecond">Time</label>
                  <input type="text" class="form-control" id="formLapTimeMinuteSecond" name="formLapTimeMinuteSecond" placeholder="e.g. 1.23:456">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formConstructor">Constructor</label>
                  <select class="form-control" name="formConstructor">
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
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formPlatform">Platform</label>
                  <select class="form-control" name="formPlatform">
                     <option>xbox</option>
                     <option>ps3</option>
                     <option>pc</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formController">Controller</label>
                  <select class="form-control" name="formController">
                     <option>wheel</option>
                     <option>hand controller</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formAssist">Assist</label>
                  <select class="form-control" name="formAssist">
                     <option>no</option>
                     <option>yes</option>
                  </select>
               </div>
            </div>
         </div>
           
              
         <br>
         <hr>
         <h2>Aero</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formAeroFront">Front</label>
                  <input type="text" class="form-control" id="formAeroFront" name="formAeroFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formAeroRear">Rear</label>
                  <input type="text" class="form-control" id="formAeroRear" name="formAeroRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
         <h2>Brakes</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBrakeBalanceFront">Balance Front</label>
                  <input type="text" class="form-control" id="formBrakeBalanceFront" name="formBrakeBalanceFront" placeholder="e.g. 50">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBrakeBalanceRear">Balance Rear</label>
                  <input type="text" class="form-control" id="formBrakeBalanceRear" name="formBrakeBalanceRear" placeholder="e.g. 50">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBrakePressure">Pressure</label>
                  <select class="form-control" name="formBrakePressure">
                     <option>low</option>
                     <option>medium</option>
                     <option>high</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBrakeSize">Size</label>
                  <select class="form-control" name="formBrakeSize">
                     <option>small</option>
                     <option>standard</option>
                     <option>large</option>
                  </select>
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
         <h2>Balance</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBalanceRollFront">Roll Front</label>
                  <input type="text" class="form-control" id="formBalanceRollFront" name="formBalanceRollFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="formBalanceRollRear">Roll Rear</label>
                  <input type="text" class="form-control" id="formBalanceRollRear" name="formBalanceRollRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
         <h2>Suspension</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formSuspensionHeightFront">Height Front</label>
                     <input type="text" class="form-control" id="formSuspensionHeightFront" name="formSuspensionHeightFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formSuspensionHeightRear">Height Rear</label>
                     <input type="text" class="form-control" id="formSuspensionHeightRear" name="formSuspensionHeightRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formSuspensionSpringFront">Spring Front</label>
                     <input type="text" class="form-control" id="formSuspensionSpringFront" name="formSuspensionSpringFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formSuspensionSpringRear">Spring Rear</label>
                     <input type="text" class="form-control" id="formSuspensionSpringRear" name="formSuspensionSpringRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
         <h2>Gearbox</h2>
         <br>
         <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox1">Gear 1</label>
                     <input type="text" class="form-control" id="formGearbox1" name="formGearbox1" placeholder="e.g. 87">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox2">Gear 2</label>
                     <input type="text" class="form-control" id="formGearbox2" name="formGearbox2" placeholder="e.g. 87">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox3">Gear 3</label>
                     <input type="text" class="form-control" id="formGearbox3" name="formGearbox3" placeholder="e.g. 87">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox4">Gear 4</label>
                     <input type="text" class="form-control" id="formGearbox4" name="formGearbox4" placeholder="e.g. 87">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox5">Gear 5</label>
                     <input type="text" class="form-control" id="formGearbox5" name="formGearbox5" placeholder="e.g. 87">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox6">Gear 6</label>
                     <input type="text" class="form-control" id="formGearbox6" name="formGearbox6" placeholder="e.g. 87">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">
               <div class="form-group">
                     <label for="formGearbox7">Gear 7</label>
                     <input type="text" class="form-control" id="formGearbox7" name="formGearbox7" placeholder="e.g. 87">
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
         <h2>Alignment</h2>
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formAlignmentCamberFront">Camber Front</label>
                     <input type="text" class="form-control" id="formAlignmentCamberFront" name="formAlignmentCamberFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formAlignmentCamberRear">Camber Rear</label>
                     <input type="text" class="form-control" id="formAlignmentCamberRear" name="formAlignmentCamberRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
            <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formAlignmentToeFront">Toe Front</label>
                     <input type="text" class="form-control" id="formAlignmentToeFront" name="formAlignmentToeFront" placeholder="e.g. 6">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                     <label for="formAlignmentToeRear">Toe Rear</label>
                     <input type="text" class="form-control" id="formAlignmentToeRear" name="formAlignmentToeRear" placeholder="e.g. 6">
               </div>
            </div>
         </div>
              
                 
         <br>
         <hr>
            <button type="submit" class="btn btn-default" name="formSubmit" value="submitAddSetup">Submit</button>
         </form>

         <footer>
           <p>&copy; Michael Thompson 2014</p>
         </footer>

      </div> <!-- /container -->

   </body>
</html>