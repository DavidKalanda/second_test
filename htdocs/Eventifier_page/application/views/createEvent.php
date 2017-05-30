<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

  <div class="container">
    <div class="well well-lg">
      <div class="createEvent">
        <h1>Create Event</h1>
      <br></br>
    <?php echo form_open('welcome/create_event'); ?>
      <div class="form-group row createEvent">
        <div class="col-10">
          <label>Title</label>
          <input type="text" value="" name="title">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-10">
          <label>Date</label>
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
</div>
