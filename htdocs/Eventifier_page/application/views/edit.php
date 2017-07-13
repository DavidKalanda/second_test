<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <!-- <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="row">
    <div class="col-md-8 col-md-offset-1">
      <?php echo form_open_multipart('event_controller/edit_event'); ?>
      <div class="form-horizontal" role="form">
      <br><br><br></br>
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Event</legend>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-2">
              <input type="text" name="title" placeholder="Title" class="form-control" required="required" autofocus value="<?= ($event[0]['title']) ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-calendar"></span>
              <label for="example-text-input" class="col-2 col-form-label">Start</label>
              <?php $min_date = date("Y-m-d");?>
              <input id="start_date" type="date" name="start_date" placeholder="Start Date " class="form-control" min="<?= $min_date ;?>" required="required" onchange="startDateChange()" value="<?= $event[0]['start_date']?>">
              <br>
              <input class="form-control" type="time" value="13:45" name="start_time" required="required" value="<?= $event[0]['start_time']?>">
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-calendar"></span>
              <label for="example-text-input" class="col-2 col-form-label">End</label>
              <input id="end_date" type="date" name="end_date" placeholder="Start Date " class="form-control" min="<?= $min_date ;?>" value="<?= $event[0]['end_date']?>">
              <br>
              <input class="form-control" type="time" value="13:45" name="end_time" value="<?= $event[0]['start_time']?>">
            </div>
          </div>
          <script type="text/javascript">
            function startDateChange()
            {
              var start_date = document.getElementById('start_date');
              // var end_date = document.getElementById('end_date');

              var min_End_Date = document.getElementById("end_date").setAttribute("min", start_date.value);
              return min_End_Date;
            }
          </script>

          <!-- Add Google map-->
          <div class="form-group">
            <div class="col-sm-4">
              <input value="<?= ($event[0]['address']) ?>" type="text" name="address" placeholder="Venue" class="form-control" required="required">
              <a href="#">Add using Google Maps</a>
            </div>
          </div>

          <!-- Text input Content-->
          <div class="form-group row">
            <div class="col-lg-10">
            <textarea rows="6" cols="50" class="form-control" type="text box" name="content" placeholder="Event Description" required="required"><?= ($event[0]['content']) ?></textarea>
            </div>
          </div>

          <!--Add image  -->
          <legend>Image upload</legend>
          <div class="col-xs-4">
        	   <div class="form-group">
               <h4>Select files from your computer</h4>
               <br>
                <!-- <form action="" method="post" enctype="multipart/form-data" id="js-upload-form"> -->
                  <div class="form-inline">
                    <div class="form-group">
                      <!-- <input type="file" name="event_image" id="js-upload-files" multiple> -->
                      <?php $error=""; ?>
                      <?php echo $error;?>
                      <input type="file" name="event_image" size="20" value="<?= ($event[0]['event_image']) ?>"/>
                    </div>
                    <!-- <button type="upload" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button> -->
                  </div>
                <!-- </form> -->
             </div>
          </div>


          <!-- Additional Info -->
          <legend>Additional Information</legend>

          <!-- Select Category -->
          <div class="form-group">
            <!-- <label class="col-md-4 control-label" for="category">Category</label> -->
            <div class="col-md-4">
              <select id="category" name="category" class="form-control" required>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="keynote_speaker" placeholder="Keynote Speaker" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="tickets_available" placeholder="Tickets Available" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="text" name="price" placeholder="Price" class="form-control" value="<?= ($event[0]['price']) ?>" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="volunteers_needed" placeholder="Volunteers Needed " class="form-control">
            </div>
          </div>


            <legend>Registration for classes</legend>
            <div class="form-group">
                <div class="col-sm-2">
                  <input type="checkbox" name="VietNgu">   Viet Ngu
                </div>
                <div class="col-sm-2">
                  <input type="checkbox" name="Math">   Math
                </div>
                <div class="col-sm-2">
                  <input type="checkbox" name="paid"  data-toggle="modal" data-target="#payment">   Pay
                </div>
          </div>
<!-- Command -->
          <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary" name="update" value="update">Save</button>
              </div>
            </div>
          </div>
        </fieldset>
        </div>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<!-- Has Sibling Modal -->
<div class="modal fade" id="sibling" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Select His/Her Sibling</h4>
            </div>
            <div class="modal-body">
                <div>
                    <input type="text" name="filter" style="border-radius: 10px" placeholder="filter">
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                           <tr>
                                <th> </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Tam</td>
                                <td>VuTran</td>
                                <td>3085 Aspen Dr Coonrapid MN 44532</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Thuy-Sa</td>
                                <td>Truong</td>
                                <td>13231 Cliff Ave Burnsville, MN 55337</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Han</td>
                                <td>Bui</td>
                                <td>1341 Trailer Tl Lakeville, MN 55321</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Done</button>
            </div>
        </div>
        <!-- /.modal-content -->
  </div>
    <!-- /.modal-dialog -->
</div>

<!-- Payment Modal -->
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Payment</h4>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-md-4">
                                  <label>Viet Ngu Payment</label>
                                </div>
                                <div class="col-md-7">
                                  <input type="text" name="vnPayment" placeholder="" class="form-control">
                                </div>
                             </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                  <label>Math Payment</label>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" name="mathPayment" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                  <label>Other Payment</label>
                                </div>
                                <div class="col-sm-7">
                                  <input type="text" name="otherPayment" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;">
                                <span class="glyphicon glyphicon-ok-sign"></span>  Done</button>
                        </div>
                    </form>
                </div>  <!-- div class="col-md-8 col-md-offset-1" -->
            </div>  <!-- div class="row" -->
        </div><!-- /.modal-content -->
    </div><!-- div class="modal-dialog -->
</div>
