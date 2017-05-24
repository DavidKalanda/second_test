<h1>Create Event</h1>
<br></br>
<div class="row">

          <div class="container">
            <?php echo form_open('users/create_event'); ?>
              <div class="form-group row">
                <label for="example-text-input" class="col-2 col-form-label">Title</label>
                <div class="col-10">
                  <input class="form-control" type="text" value="" name="title">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                  <input class="form-control" type="date" value="" name="date">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-time-input" class="col-2 col-form-label">Time</label>
                <div class="col-10">
                  <input class="form-control" type="time" value="13:45:00" name="time">
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
          <!-- /.container -->

      </div>
