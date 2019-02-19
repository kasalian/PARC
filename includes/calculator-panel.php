<!-- Modal -->
    <div class="modal fade" id="modal-login" role="dialog">
      <div class="modal-dialog modal-md">
      
        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-header mdl-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4>Calculator</h4>
            <!-- <span class="glyphicon glyphicon-lock"></span> -->
          </div>

            <?php 

              if (isset($_POST['btncalculate'])) {
              echo "alert('Hello Calculator');";
              $usern = $_POST['username'];
              $passw = $_POST['password'];
              
              $User = new User();
              $see = $User->loginDetails($usern);
              echo $see;
              }

             ?>

          <div class="modal-body">
            <form role="form" method="POST" action="">
              <div class="form-group">
                <label for="usr"><span class="glyphicon glyphicon-eye-open"></span> Enter Length</label>
                <input type="number" class="form-control" id="length" required>
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Enter Width</label>
                <input type="number" class="form-control" id="width" required>
              </div>
                <button type="submit" id="btncalculate" class="btn btn-block">Calculate</button>
                
            </form>
          </div>


          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p><a href="#">Open for contribution</a></p>
          </div>
        </div> 
      </div>
    </div>