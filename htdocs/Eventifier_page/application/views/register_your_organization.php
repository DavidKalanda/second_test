<div class="container" style="height: 400px; width: 100%; overflow: hidden;">
  <header>
        <div class="carousel-inner" >
              <div class="item active" >
                  <div class="fill">
                    <img style="width: 100%" src="images/comp5.jpg">
                  </div>
                  <div class="carousel-caption">
                      <h1 style="font-size: 52px"><b>Register your organization</b></h1>
                      <h2 style="font-size: 42px">We will make every event count</h2>
                      <br><br><br>
                  </div>
              </div>
        </div>
  </header>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <section>
        <br>
        <h1 class="entry-title"><span>Register Your Organization</span> </h1>
        <hr>

        <!--Step 1 of 3-->
      <?php echo form_open_multipart('Welcome/org_registration'); ?>
        <div class="container" style="margin-bottom: 50px">
          <div class="row">
              <div class="col-md-1">
                  <div class="thumbnail" style="border: 0"><img class="visible-md-block visible-lg-block visible-md-inline visible-lg-inline visible-md-inline-block visible-lg-inline-block hidden-xs hidden-sm" src="images/map.png" width="50" height="50">
                  </div>
              </div>
              <div class="col-md-10"><h4 style="color: rgba(0,0,0,0.26);"><b>Step 1 of 3</b></h4>
                  <h1><strong>Where is your Organization located?</strong></h1>
                  <input name="org_location" id="register_page" class="input" type="text" placeholder="Search your city" size="85" required="required">
              </div>
          </div>
        </div>

        <!-- Step 2 of 3 -->

        <div class="container" style="margin-bottom: 50px">
          <div class="row">

              <div class="col-md-1">
                  <div class="thumbnail" style="border: 0"><img class="visible-md-block visible-lg-block visible-md-inline visible-lg-inline visible-md-inline-block visible-lg-inline-block hidden-xs hidden-sm" src="images/tag.png" width="50" height="50">
                  </div>
              </div>

              <div class="col-md-10"><h4 style="color: rgba(0,0,0,0.26);"><b>Step 2 of 3</b></h4>
                  <h1><strong>What is the name of your Organization?</strong></h1>
                  <input name="org_name" id="register_page" class="input" type="text" placeholder="Your organization name" size="85" required="required">
                  <h2><strong>Describe your organization</strong></h2>
                  <textarea name="org_description" rows="8" cols="85" type="text box" placeholder="Our organization is for..." required="required"></textarea>
                  <h2><strong>Organization type</strong></h2>
                  <div class="form-group" id="private_organization">
                    <div class="col-md-4">
                        <label for="organization_type" style="font-size: 20px">
                        <input type="radio" name="org_type" style="margin-right: 5px" value="1" id="org_private" checked>Private</label>
                        <i class="glyphicon glyphicon-info-sign"></i>
                    </div>
                    <div class="col-md-4">
                        <label for="organization_type" style="font-size: 20px">
                        <input type="radio" name="org_type" style="margin-right: 5px" id="org_public">Public</label>
                        <i class="glyphicon glyphicon-info-sign"></i>
                    </div>
                  </div>

                  <div class="form-group" id="private_org_details">
                    <div class="col-md-10 checkbox">
                      <label style="font-size: 20px; margin-left: 25px;">
                        <input type="checkbox" name="" style="zoom: 1.3">Make it specific to an organization</label>
                        <input type="text" name="" placeholder="Your parent organization name" size="75" style="margin-left: 45px; margin-top: 10px">
                    </div>
                    <div class="col-md-10 checkbox">
                      <label style="font-size: 20px; margin-left: 25px; margin-top: 20px">
                        <input type="checkbox" name="" style="zoom: 1.3">Have a common domain</label>
                        <input type="text" name="org_domain" placeholder="eg. 'user@institution.com'" size="75" style="margin-left: 45px; margin-top: 10px">
                    </div>
                  </div>

              </div>
          </div>
        </div>

          <!-- Step 3 of 3 -->

        <div class="container" style="margin-bottom: 50px">
          <div class="row">
              <div class="col-md-1">
                  <div class="thumbnail" style="border: 0"><img class="visible-md-block visible-lg-block visible-md-inline visible-lg-inline visible-md-inline-block visible-lg-inline-block hidden-xs hidden-sm" src="images/spy2.png" width="50" height="50" style="text-align: right;">
                  </div>
              </div>
              <div class="col-md-10"><h4 style="color: rgba(0,0,0,0.26);"><b>Step 3 of 3</b></h4>
                  <h1><strong>Terms and Conditions</strong></h1><h4>By clicking submit, you agree to the terms and conditions of using Eventifier</h4>
              </div>
          </div>
        </div>
        <div style="text-align: right; font-size: 25px; color: white;">
        <input type="submit" name="orgSubmit" value="Submit your organization" style="background-color: rgba(103,93,249,1); border-width: 0px; border-radius: 10px; box-shadow: 6px 6px 8px #888888">
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    document.getElementById("org_private").addEventListener("click", function(){
        document.getElementById("private_org_details").setAttribute("style", "display: visible");
    });

    document.getElementById("org_public").addEventListener("click", function(){
        document.getElementById("private_org_details").setAttribute("style", "display: none");
    });
</script>
