<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

  <!-- <div class="container">
    <div class="well well-lg">
      <div class="createEvent">
        <h1>Create Event</h1>
      <br></br>
    <?php echo form_open('welcome/create_event'); ?>
      <div class="form-group row">
        <div class="col-10">
          <label>Title</label>
          <input type="text" value="" name="title">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-10">
          <label> Start Date</label>
          <input type="date" value="" name="date">
          <label class="col-2 col-form-label">Time</label>
          <input type="time" name="time">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-time-input" class="col-2 col-form-label">Time</label>
        <div class="col-10">
          <input class="form-control" type="time" value="13:45:00" name="time">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2 col-form-label">Price</label>
        <div class="col-10">
          <input class="form-control" type="price" value="$" name="price">
        </div>
      </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Content</label>
          <div class="col-10">
          <textarea class="form-control" type="text box" value="" name="content"></textarea>
          </div>
        </div>
        <div class="form-group">
            <input type="submit" name="createSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
  </div>
</div>
</div> -->

<div class="row">
    <div class="col-md-8 col-md-offset-1">
      <?php echo form_open('welcome/create_event'); ?>
      <div class="form-horizontal" role="form">
      <br><br><br></br>
        <fieldset>

          <!-- Form Name -->
          <legend>Create Event</legend>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-2">
              <input type="text" name="title" placeholder="Title" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-calendar"></span>
              <label for="example-text-input" class="col-2 col-form-label">Start</label>
              <input type="date" name="start_date" placeholder="Start Date " class="form-control">
              <br>
              <input class="form-control" type="time" value="13:45" name="start_time">
            </div>
            <div class="col-sm-4">
              <span class="glyphicon glyphicon-calendar"></span>
              <label for="example-text-input" class="col-2 col-form-label">End</label>
              <input type="date" name="end_date" placeholder="Start Date " class="form-control">
              <br>
              <input class="form-control" type="time" value="13:45" name="end_time">
            </div>
          </div>

          <!-- Add Google map-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="address" placeholder="Vanue" class="form-control">
              <a href="#">Add using Google Maps</a>
            </div>
          </div>

          <!-- Text input Content-->
          <div class="form-group row">
            <div class="col-lg-10">
            <textarea rows="6" cols="50" class="form-control" type="text box" name="content" placeholder="Event Description"></textarea>
            </div>
          </div>

          <!--Add image  -->
          <div class="form-group">
            <div class="col-sm-2">
              <label for="example-text-input" class="col-2 col-form-label">Image</label>
              <input type="text" name="image_link" placeholder="Image" class="form-control"><br>
              <button type="button" name="button" class="btn btn-defaul">Add image</button>
            </div>
          </div>

          <!-- Additional Info -->
          <legend>Additional Information</legend>
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
              <input type="text" name="price" placeholder="Price" class="form-control" value="$">
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
                <button type="submit" class="btn btn-primary" name="createSubmit" value="Submit">Save</button>
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
