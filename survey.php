<?php
    include("db.php");
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- Style CSS-->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>

    <div class="container" id="header">
      <div class="row">
        <div class="col-md-9">
          <h4>ClientWebquest Survey</h4>
        </div>
        <div class="col-md-3">
          <img src="LogoMakr-4LcuKq.png" alt="Logo" srcset="" />
        </div>
      </div>
    </div>
    <div class="container w-50" id="infos">
      <hr />
      <p class="p-2 font-weight-bold" id="p-infos">
        Welcome to our TrendyCode Company! We are thrilled to embark on this
        journey with you, bringing your digital dreams to life. Our expert team
        of developers is committed to crafting innovative and captivating web
        solutions that will elevate your brand to new heights.
      </p>

      <form method="post"  id="survey_form">
        <!-- Page 1 content goes here -->
        <div id="page1" class="pt-4 pl-4 pr-4 pb-4">
          <div class="form-group">
            <label>Email address <span class="text-danger">*</span></label>
            <input
              type="text"
              name="email"
              id="email"
              class="form-control"
              placeholder="Your email address"
            />
            <span id="error_email" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Your Name <span class="text-danger">*</span></label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control"
              placeholder="Your name"
            />
            <span id="error_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label
              >Select your gender ? <span class="text-danger">*</span></label
            ><br />
            <label class="check-inline">
              <input type="radio" name="gender" value="female" checked />
              Female </label
            ><br />
            <label class="check-inline">
              <input type="radio" name="gender" value="male" /> Male
            </label>
          </div>
          <div class="button-group text-right">
            <button type="button" class="btn btn-disabled backStep1">
              <span aria-hidden="true">&laquo;</span>
            </button>
            <button type="button" class="btn btn-primary nextStep1">
              <span aria-hidden="true">&raquo;</span>
            </button>
          </div>
        </div>
        <!-- Page 2 content goes here -->
        <div id="page2" class="pt-4 pl-4 pr-4 pb-4" style="display: none">
          <div class="form-group">
            <label for="request"
              >Request <span class="text-danger">*</span></label
            >
            <textarea
              name="request"
              id="request"
              cols="60"
              rows="5"
              class="form-check"
            ></textarea>
            <span id="error_request" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label
              >How did you hear about Us ?<span class="text-danger"
                >*</span
              ></label
            >
            <br />
            <label class="radio-inline">
              <input type="radio" name="about" value="search" checked /> Search
              Engine (Google, Bing, etc.)
            </label>
            <br />
            <label class="radio-inline">
              <input type="radio" name="about" value="Blog" /> Blog or Social
              Media
            </label>
            <br />
            <label class="radio-inline">
              <input type="radio" name="about" id="Friend" />Friend
            </label>
          </div>
          <div class="form-group">
            <label
              >What services are you looking for ?
              <span class="text-danger">*</span></label
            >
            <br />
            <label class="check-inline">
              <input type="checkbox" name="services" value="web" checked />
              Web Development
            </label>
            <br />
            <label class="check-inline">
              <input type="checkbox" name="services" id="design" />
              Web Design
            </label>
            <br />
            <label class="check-inline">
              <input type="checkbox" name="services" id="app" />
              App Development
            </label>
            <br />
            <label class="check-inline">
              <input type="checkbox" name="services" id="seo" />
              Seo & Wordpress
            </label>
          </div>
          <div class="button-group text-right">
            <button type="button" class="btn btn-primary backStep2">
              <span aria-hidden="true">&laquo;</span>
            </button>
            <button type="button" class="btn btn-primary nextStep2">
              <span aria-hidden="true">&raquo;</span>
            </button>
          </div>
        </div>
        <!-- Page 3 content goes here -->
        <div id="page3" class="pt-4 pl-4 pr-4 pb-4" style="display: none">
          <div class="form-group">
            <label
              >Would you recommand us to a Friend ?<span class="text-danger"
                >*</span
              ></label
            ><br />
            <label class="radio-inline">
              <input type="radio" name="recomm" value="yes" checked />
              Yes </label
            ><br />
            <label class="radio-inline">
              <input type="radio" name="recomm" value="no" />
              No </label
            ><br />
            <label class="radio-inline">
              <input type="radio" name="recomm" value="maybe" />
              Maybe
            </label>
          </div>
          <div class="form-group">
            <label
              >Any comments or suggestions ?<span class="text-danger"
                >*</span
              ></label
            >
            <textarea
              name="comments"
              id="comments"
              cols="60"
              rows="5"
            ></textarea>
            <span id="error_comments" class="text-danger"></span>
          </div>
          <div class="button-group text-right">
            <button type="button" class="btn btn-primary backStep3">
              <span aria-hidden="true">&laquo;</span>
            </button>
            <button type="button" class="btn btn-primary nextStep3">
              <span aria-hidden="true">&raquo;</span>
            </button>
          </div>
        </div>
        <div id="page4" style="display: none">
          <?php echo $message; ?>
        </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      $(document).ready(function () {
        /***************** Page1 ***************/
        $(".nextStep1").click(function () {
          var error_email = "";
          var error_name = "";
          var filter =
            /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if ($.trim($("#email").val()).length == 0) {
            error_email = " *Email is required";
            $("#error_email").text(error_email);
            $("#email").addClass("has-error");
          } else {
            if (!filter.test($("#email").val())) {
              error_email = "Invalid Email";
              $("#error_email").text(error_email);
              $("#email").addClass("has-error");
            } else {
              error_email = "";
              $("#error_email").text(error_email);
              $("#email").removeClass("has-error");
            }
          }

          if ($.trim($("#name").val()).length == 0) {
            error_name = "*Name is required";
            $("#error_name").text(error_name);
            $("#name").addClass("has-error");
          } else {
            error_name = "";
            $("#error_name").text(error_name);
            $("#name").removeClass("has-error");
          }

          if (error_email != "" || error_name != "") {
            return false;
          } else {
            $("#page1").hide();
            $("#page2").show();
          }
        });
        /**************** Page2 ***************/
        $(".nextStep2").click(function () {
          var error_request = "";

          if ($.trim($("#request").val()).length == 0) {
            error_request = "*Your request is required";
            $("#error_request").text(error_request);
            $("#request").addClass("has-error");
          } else {
            error_request = "";
            $("#error_request").text(error_request);
            $("#request").removeClass("has-error");
          }

          if (error_request != "") {
            return false;
          } else {
            $("#page1").hide();
            $("#page2").hide();
            $("#page3").show();
          }
        });

        $(".backStep2").click(function () {
          $("#page1").show();
          $("#page2").hide();
        });

        /**************** Page3 ***************/
        $(".nextStep3").click(function () {
          var error_comments = "";

          if ($.trim($("#comments").val()).length == 0) {
            error_name = "*Your comments is required";
            $("#error_comments").text(error_comments);
            $("#comments").addClass("has-error");
          } else {
            error_comments = "";
            $("#error_comments").text(error_comments);
            $("#comments").removeClass("has-error");
          }

          if (error_comments != "") {
            return false;
          } else {
            $("#page1").hide();
            $("#page2").hide();
            $("#page3").hide();
            $("#page4").show();
            $("#survey_form").submit();
          }
        });
        $(".backStep3").click(function () {
          $("#page2").show();
          $("#page3").hide();
        });
     
      });
    </script>
  </body>
</html>
