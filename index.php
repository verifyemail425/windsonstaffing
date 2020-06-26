<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from stepform.cidcode.net/timon-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jun 2020 03:53:48 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">

    <title>Timon - Step Form Wizard</title>

    <!--Import Google Icon Font-->
    <link href='http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext' rel='stylesheet'
          type='text/css'>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!--Import Multi Step Indicator css-->
    <link href="assets/css/gsi-step-indicator.min.css" rel="stylesheet"/>

    <!--Import  Step Form Wizard css-->
    <link href="assets/css/tsf-step-form-wizard.min.css" rel="stylesheet"/>
    <!--Import  demo css-->
    <link href="assets/css/demo.min.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--Plugin for validation-->
    <link href="assets/plugin/parsley/css/parsley.css" rel="stylesheet"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<div class="demo-settings" data-open="true">
    <!--    <div class="settings-icon">-->
    <!--        <a href="#" class="btn-setting"><i class="fa fa-2x fa-cogs"></i></a>-->
    <!--        <a href="#" class="btn-remove"><i class="fa fa-2x fa-times"></i></a>-->
    <!--    </div>-->
    <div class="settings-main">
        <label>Step effect</label>
        <select class="form-control" id="stepEffect">
            <option value="basic" selected="selected">basic</option>
            <option value="bounce">bounce</option>
            <option value="slideRightLeft">slideRightLeft</option>
            <option value="slideLeftRight">slideLeftRight</option>

            <option value="flip">flip</option>
            <option value="transformation">transformation</option>
            <option value="slideDownUp">slideDownUp</option>
            <option value="slideUpDown">slideUpDown</option>
        </select>
        <br/>
        <label for="stepTransition">
            Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked/>
        </label>
        <br/>
        <label for="showButtons">
            Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked/>
        </label>
        <br/>
        <label for="showStepNum">
            Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked/>
        </label>
    </div>
</div>

<div class="container">
    <!--    <div class="row"><h1>Windson Staffing</h1></div>-->
    <div class="row">
        <center><h3> APPLICATION FOR EMPLOYMENT</h3></center>
        <!-- BEGIN STEP FORM WIZARD -->
        <div class="tsf-wizard tsf-wizard-1 ">
            <!-- BEGIN NAV STEP-->
            <div class="tsf-nav-step">
                <!-- BEGIN STEP INDICATOR-->
                <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                    <li class="current" data-target="step-1">
                        <a href="#0">
                            <span class="number">1</span>
                            <span class="desc">
                                <label>Applicant Details</label>
                            </span>
                        </a>
                    </li>
                    <li data-target="step-2">
                        <a href="#0">
                            <span class="number">2</span>
                            <span class="desc">
                                    <label>Profile setup</label>
                                    <span>Profile details</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-3">
                        <a href="#0">
                                <span class="number">
                                    3
                                </span>
                            <span class="desc">
                                    <label>Employment Record</label>
                                    <span>Employment Record</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-4">
                        <a href="#0">
                                <span class="number">
                                    4
                                </span>
                            <span class="desc">
                                    <label>Employment History</label>
                                    <span></span>
                                </span>
                        </a>
                    </li>

                    <li data-target="step-5">
                        <a href="#0">
                                <span class="number">
                                    5
                                </span>
                            <span class="desc">
                                    <label>Step 5</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-6">
                        <a href="#0">
                                <span class="number">
                                    6
                                </span>
                            <span class="desc">
                                    <label>Step 6</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-7">
                        <a href="#0">
                                <span class="number">
                                    7
                                </span>
                            <span class="desc">
                                    <label>Step 7</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-8">
                        <a href="#0">
                                <span class="number">
                                    8
                                </span>
                            <span class="desc">
                                    <label>Step 8</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-9">
                        <a href="#0">
                                <span class="number">
                                    9
                                </span>
                            <span class="desc">
                                    <label>Step 5</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-11">
                        <a href="#0">
                                <span class="number">
                                    11
                                </span>
                            <span class="desc">
                                    <label>Step 11</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-12">
                        <a href="#0">
                                <span class="number">
                                    12
                                </span>
                            <span class="desc">
                                    <label>Step 12</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-13">
                        <a href="#0">
                                <span class="number">
                                    13
                                </span>
                            <span class="desc">
                                    <label>Step 13</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                    <li data-target="step-14">
                        <a href="#0">
                                <span class="number">
                                    14
                                </span>
                            <span class="desc">
                                    <label>Step 14</label>
                                    <span>Step description</span>
                                </span>
                        </a>
                    </li>
                </ul>
                <!-- END STEP INDICATOR--->
            </div>
            <!-- END NAV STEP-->
            <!-- BEGIN STEP CONTAINER -->
            <div class="tsf-container">
                <!-- BEGIN CONTENT-->
                <div class="tsf-content">
                    <!-- BEGIN STEP 1-->
                    <div class="tsf-step step-1 active">
                        <fieldset>
                            <legend>Provide your details</legend>
                            <div class="row">
                                <!-- BEGIN STEP CONTENT-->
                                <form class="tsf-step-content">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Applicant Name* :</label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="Applicant Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Date Of Application* :</label>
                                            <input type="date" class="form-control" disabled
                                                   value="<?php echo date('Y-m-d'); ?>" id="exampleInputPassword1"
                                                   placeholder="Date Of Application">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Date Of Birth* :</label>
                                            <input type="date" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="Date Of Birth">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Social Security No* :</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="Social Security No">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License No.* :</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="License No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License Issue State* :</label>
                                            <select class="form-control">
                                                <option value="">License Issue State</option>
                                                <option value="AL">AL</option>
                                                <option value="AK">AK</option>
                                                <option value="AR">AR</option>
                                                <option value="AZ">AZ</option>
                                                <option value="CA">CA</option>
                                                <option value="CO">CO</option>
                                                <option value="CT">CT</option>
                                                <option value="DC">DC</option>
                                                <option value="DE">DE</option>
                                                <option value="FL">FL</option>
                                                <option value="GA">GA</option>
                                                <option value="HI">HI</option>
                                                <option value="IA">IA</option>
                                                <option value="ID">ID</option>
                                                <option value="IL">IL</option>
                                                <option value="IN">IN</option>
                                                <option value="KS">KS</option>
                                                <option value="KY">KY</option>
                                                <option value="LA">LA</option>
                                                <option value="MA">MA</option>
                                                <option value="MD">MD</option>
                                                <option value="ME">ME</option>
                                                <option value="MI">MI</option>
                                                <option value="MN">MN</option>
                                                <option value="MO">MO</option>
                                                <option value="MS">MS</option>
                                                <option value="MT">MT</option>
                                                <option value="NC">NC</option>
                                                <option value="NE">NE</option>
                                                <option value="NH">NH</option>
                                                <option value="NJ">NJ</option>
                                                <option value="NM">NM</option>
                                                <option value="NV">NV</option>
                                                <option value="NY">NY</option>
                                                <option value="ND">ND</option>
                                                <option value="OH">OH</option>
                                                <option value="OK">OK</option>
                                                <option value="OR">OR</option>
                                                <option value="PA">PA</option>
                                                <option value="RI">RI</option>
                                                <option value="SC">SC</option>
                                                <option value="SD">SD</option>
                                                <option value="TN">TN</option>
                                                <option value="TX">TX</option>
                                                <option value="UT">UT</option>
                                                <option value="VT">VT</option>
                                                <option value="VA">VA</option>
                                                <option value="WA">WA</option>
                                                <option value="WI">WI</option>
                                                <option value="WV">WV</option>
                                                <option value="WY">WY</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License Exp. Date* :</label>
                                            <input type="date" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="License Exp. Date ">
                                        </div>
                                    </div>
                                </form>
                                <!-- END STEP CONTENT-->
                            </div>
                        </fieldset>
                    </div>
                    <!-- END STEP 1-->
                    <!-- BEGIN STEP 2-->
                    <div class=" tsf-step step-2 ">
                        <fieldset>
                            <legend>Applicant Information</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <div class="row">
                                <form class="tsf-step-content">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Applicant Name</label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="Applicant Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Telephone* </label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="Telephone " required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Email*</label>
                                            <input type="email" class="form-control" id="example_username"
                                                   placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Date Of Birth:</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="Date Of Birth">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Social Security No:</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="Social Security No">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fax(If Applicable):</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="Fax">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License No.:</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="License No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License Issue State:</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="License Issue State">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License Type* :</label>
                                            <select id="license_type"  name="license_type" class="form-control">
                                                <option value="">Select Typ</option>
                                                <option value="Class A">Class A</option>
                                                <option value="Class AZ">Class AZ</option>
                                                <option value="Class B">Class B</option>
                                                <option value="Class C">Class C</option>
                                                <option value="Class D">Class D</option>
                                                <option value="Class E">Class E</option>
                                                <option value="Class R">Class R</option>
                                                <option value="Class 1">Class 1</option>
                                                <option value="Class 2">Class 2</option>
                                                <option value="Class 3">Class 3</option>
                                                <option value="Class 4">Class 4</option>
                                                <option value="Class 5">Class 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>License Exp. Date :</label>
                                            <input type="text" class="form-control" id="exampleInputPasswordAgain1"
                                                   placeholder="License Exp. Date ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Has any license, permit or privilege ever been suspended or
                                                revoked?*</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes"
                                                   data-off="No" data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Have you ever been denied a license, permit or privilege to operate a
                                                motor vehicle?*</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes"
                                                   data-off="No" data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address </label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City,State,Zip</label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="City,State,Zip" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>How Long?*</label>
                                            <input type="text" class="form-control" id="example_username"
                                                   placeholder="Status" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Do you have the legal right to work in the United States?*</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes"
                                                   data-off="No" data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Can you provide proof of legal status?*</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes"
                                                   data-off="No" data-size="mini">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Emergency Contact</legend>
                            <!-- BEGIN STEP CONTENT-->
                        <div class="row">
                            <form class="tsf-step-content">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Name* :</label>
                                        <input type="text" class="form-control" id="example_username" placeholder="Name"
                                               required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Relation* :</label>
                                        <input type="text" class="form-control" id="example_username"
                                               placeholder="Relation" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address* :</label>
                                        <input type="text" class="form-control" id="example_username"
                                               placeholder="Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Contact Number* :</label>
                                        <input type="text" class="form-control" id="example_username"
                                               placeholder="Contact Number" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>Employment Information</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <div class="row">
                            <form class="tsf-step-content">
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Have you worked for this company before?*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>From* :</label>
                                        <input type="Date" class="form-control" id="example_username" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>To* :</label>
                                        <input type="Date" class="form-control" id="example_username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Can you provide proof of legal status?*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Reason for leaving?* :</label>
                                        <input type="text" class="form-control" id="example_username"
                                               placeholder="Reason" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Are you now employed?*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <h5> If not, date left last employment:</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="example_username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Have you ever been bonded?*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <h5> If Yes, Name of bonding company::</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name"
                                               id="example_username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Have you ever been convicted of a felony?*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <h5> If Yes, explain fully on a separate sheet.:</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Explain"
                                               id="example_username" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-8">
                                        <h5>Conviction of a crime is not an automatic bar to employment. All
                                            circumstances will be considered.*</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                               data-size="mini">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <h5> If Yes, please explain: :</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Explain"
                                               id="example_username" required>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                        <fieldset>
                            <legend>Education Information</legend>
                            <div class="row">
                                <form>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Highest Grade Completed: 1 2 3 4 5 6 7 8 9 10 11 12 College: 1 2 3 4
                                                    Higher:.*</label>
                                            <input style="width: 50%" type="text" class="form-control" placeholder="Highest Grade"
                                                   id="example_username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Last School Attended:</label>
                                            <input type="text" class="form-control" placeholder="Last School Attended"
                                                   id="example_username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City, State:</label>
                                            <input type="text" class="form-control" placeholder="City, State"
                                                   id="example_username" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 2-->
                    <!-- BEGIN STEP 3-->
                    <div class=" tsf-step step-3 ">
                        <fieldset>
                            <legend>Employment Record</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <div class="row">
                                   <div class="col-lg-3">
                                       <div class="form-group">
                                            <input type="radio" name="employer" value="1" checked style="width:20px;height:20px" onclick="showEmployer(this.value)"> 1
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="radio" name="employer" value="2" style="width:20px;height:20px" onclick="showEmployer(this.value)"> 2
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="radio" name="employer" value="3" style="width:20px;height:20px" onclick="showEmployer(this.value)"> 3
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <input type="radio" name="employer" value="4" style="width:20px;height:20px" onclick="showEmployer(this.value)"> 4+
                                        </div>
                                    </div>

                            <form class="tsf-step-content">
                                <div id="emp1">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Employer* :</label>
                                            <input type="email" class="form-control" id="example_cardName"
                                                   placeholder="Employer" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed From* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed To* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Street* : </label>
                                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City,State,Zip:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="City,State,Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Phone :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Supervisor:*	</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Supervisor">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Position:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Position">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Reason for Leaving :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Reason for Leaving">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Email :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Were you subject to the FMCSRs while employed?</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                </div>
                                <div id="emp2" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Employer* :</label>
                                            <input type="email" class="form-control" id="example_cardName" placeholder="Employer" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed From* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed To* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Street* : </label>
                                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City,State,Zip:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="City,State,Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Phone :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Supervisor:*	</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Supervisor">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Position:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Position">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Reason for Leaving :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Reason for Leaving">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Email :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Were you subject to the FMCSRs while employed?</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                </div>
                                <div id="emp3" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Employer* :</label>
                                            <input type="email" class="form-control" id="example_cardName"
                                                   placeholder="Employer" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed From* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed To* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Card Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Street* : </label>
                                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City,State,Zip:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="City,State,Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Phone :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Supervisor:*	</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Supervisor">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Position:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Position">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Reason for Leaving :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Reason for Leaving">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Email :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Were you subject to the FMCSRs while employed?</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                </div>
                                <div id="emp4" style="display: none">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Employer* :</label>
                                            <input type="email" class="form-control" id="example_cardName"
                                                   placeholder="Employer" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed From* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Employed To* :</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1"
                                                  >
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Street* : </label>
                                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>City,State,Zip:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="City,State,Zip">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Phone :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Supervisor:*	</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Supervisor">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Position:*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Position">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Reason for Leaving :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Reason for Leaving">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Email :*</label>
                                            <input type="text" class="form-control" id="exampleInputAddress"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Were you subject to the FMCSRs while employed?</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-8">
                                            <h5>Was your job designated as a safety sensitive function in any DOT regulated mode subject to the drug & alcohol testing requirements of 49 CFR Part 40??</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="checkbox" checked data-toggle="toggle" data-on="Yes" data-off="No"
                                                   data-size="mini">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                            </div>
                        </fieldset>
                    </div>
                    <!-- END STEP 3-->
                    <!-- BEGIN STEP 4-->
                    <div class="tsf-step step-4">
                        <fieldset>
                            <legend>Declaration of Employment Status (GAPS in Employment History)
                            </legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p style="text-align: ">
                                            I understand that I must provide my complete employment history for the past 3 years, and all CDL required employment for the 7 years preceding that. Any gaps in employment longer than 1 month are explained as follows:
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label onclick="show_gap()"> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> There are no gaps in my employment history in the last 10 years of over 1 month.</label>
                                        </div>
                                    </div>
                                    <div id="history" style="display: none">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="1" checked
                                                       style="width:20px;height:20px" onclick="showGap(this.value)"> 1
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="2" style="width:20px;height:20px"
                                                       onclick="showGap(this.value)"> 2
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="3" style="width:20px;height:20px"
                                                       onclick="showGap(this.value)"> 3
                                            </div>
                                        </div>
                                        <div id="gap1">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>During a gap in my employment</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <input type="date" class="form-control" id="emp_from">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>To:</label>
                                                    <input type="date" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>I was engaged in the following activity: </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Reason"
                                                           id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not employed by any company or individual.</label>
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="gap2" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>During a gap in my employment</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <input type="date" class="form-control" id="emp_from">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>To:</label>
                                                    <input type="date" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>I was engaged in the following activity: </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Reason"
                                                           id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not employed by any company or individual.</label>
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="gap3" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>During a gap in my employment</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <input type="date" class="form-control" id="emp_from">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>To:</label>
                                                    <input type="date" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <h4>I was engaged in the following activity: </h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Reason"
                                                           id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not employed by any company or individual.</label>
                                                    <label> <input type="checkbox"  id="show_gap"  checked style="height:20px;width: 20px"> I was not convicted of any criminal act involving the use of a CMV or while driving a CMV.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 4-->
                    <!-- BEGIN STEP 5-->
                    <div class="tsf-step step-5">
                        <fieldset>
                            <legend> Accidents for Past Three (3) Years:</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label onclick="showAccidents()"> <input type="checkbox"  id="show_accidents"  checked style="height:20px;width: 20px">  I have no accidents to report.</label>
                                        </div>
                                    </div>
                                    <div id="accidents" style="display: none">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="1" checked
                                                       style="width:20px;height:20px" onclick="show_accident(this.value)"> 1
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="2" style="width:20px;height:20px"
                                                       onclick="show_accident(this.value)"> 2
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="3" style="width:20px;height:20px"
                                                       onclick="show_accident(this.value)"> 3
                                            </div>
                                        </div>
                                        <div id="accident1">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Accident Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Description :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>	# of Injuries / Fatalities</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accident2" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Accident Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Description :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>	# of Injuries / Fatalities</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accident3" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Accident Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Description :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>	# of Injuries / Fatalities</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 5-->
                    <!-- BEGIN STEP 6-->
                    <div class="tsf-step step-6">
                        <fieldset>
                            <legend>Traffic Convictions & Forfeitures for Past Three (3) Years</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label onclick="showAccidents()"> <input type="checkbox"  id="show_accidents"  checked style="height:20px;width: 20px"> I have no accidents to report.</label>
                                        </div>
                                    </div>
                                    <div id="accidents" style="display: none">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="1" checked
                                                       style="width:20px;height:20px" onclick="show_accident(this.value)"> 1
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="2" style="width:20px;height:20px"
                                                       onclick="show_accident(this.value)"> 2
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="radio" name="gap" value="3" style="width:20px;height:20px"
                                                       onclick="show_accident(this.value)"> 3
                                            </div>
                                        </div>
                                        <div id="traffic1">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Location :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Charge :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Penalty :</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="traffic2" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Location :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Charge :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Penalty :</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="traffic3" style="display: none">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Date: </label>
                                                    <input type="date" class="form-control" id="acc_date1">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Location :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Charge :</label>
                                                    <input type="text" class="form-control" id="emp_to">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Penalty :</label>
                                                    <input type="text" class="form-control" placeholder="Reason" id="no_of_injuries">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 6->
            <!-- BEGIN STEP 7-->
                    <div class="tsf-step step-7">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 7
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 7-->
                    <!-- BEGIN STEP 8-->
                    <div class="tsf-step step-8">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 8
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 8-->
                    <!-- BEGIN STEP 9-->
                    <div class="tsf-step step-9">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 9
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 9-->
                    <!-- BEGIN STEP 10-->
                    <div class="tsf-step step-10">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 10
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 10-->
                    <!-- BEGIN STEP 11-->
                    <div class="tsf-step step-11">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 11
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 11-->
                    <!-- BEGIN STEP 12-->
                    <div class="tsf-step step-12">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 12
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 12-->
                    <!-- BEGIN STEP 13-->
                    <div class="tsf-step step-13">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 13
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 13-->
                    <!-- BEGIN STEP 14-->
                    <div class="tsf-step step-14">
                        <fieldset>
                            <legend>Agreement</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <form class="tsf-step-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            Step 14
                                        </p>
                                    </div>
                                </div>
                            </form>
                            <!-- END STEP CONTENT-->
                        </fieldset>
                    </div>
                    <!-- END STEP 14-->

                </div>
                <!-- END CONTENT-->
                <!-- BEGIN CONTROLS-->
                <div class="tsf-controls ">
                    <!-- BEGIN PREV BUTTTON-->
                    <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                        <i class="fa fa-chevron-left"></i> PREV
                    </button>
                    <!-- END PREV BUTTTON-->
                    <!-- BEGIN NEXT BUTTTON-->
                    <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                        NEXT <i class="fa fa-chevron-right"></i>
                    </button>
                    <!-- END NEXT BUTTTON-->
                    <!-- BEGIN FINISH BUTTTON-->
                    <button type="button" data-type="finish" class="btn btn-right tsf-wizard-btn">
                        FINISH
                    </button>
                    <!-- END FINISH BUTTTON-->
                </div>
                <!-- END CONTROLS-->
            </div>
            <!-- END STEP CONTAINER -->


        </div>
        <!-- END STEP FORM WIZARD -->
        <footer>
            <p> 2016 © Copyright <a href="http://codecanyon.net/user/cidcode?ref=cidcode">cidcode</a></p>
        </footer>
    </div>

    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/coustom.js"></script>
    <!--Plugin for validation-->
    <script src="assets/plugin/parsley/js/parsley.min.js"></script>
    <script src="assets/js/tsf-wizard-plugin.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function () {
            pageLoadScript();
        });

        var tsf1;

        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style1';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


            tsf1 = $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                validation: false,
                manySteps: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '350px',
                onNextClick: function (e, from, to) {
                    console.log('onNextClick from ' + from +
                        ' - to ' + to)
                },
                onPrevClick: function (e, from, to) {
                    console.log('onPrevClick from ' + from +
                        ' - to ' + to)
                },
                onFinishClick: function (e, validation) {
                    $('#result').append('<br/>onFinishClick validation ' + validation)
                }
            });
            $('.tsf-wizard-2').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'left',
                validation: false,
                manySteps: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '350px'
            });
            $('.tsf-wizard-3').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'right',
                validation: false,
                manySteps: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '350px'
            });
            $('.tsf-wizard-4').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'bottom',
                validation: false,
                manySteps: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '350px'
            });
        }
        function show_gap(){

            if($('#show_gap').is(":checked")){
                document.getElementById('history').style.display = "none";
            }
            else{
                document.getElementById('history').style.display = "block";
            }
        }

        function showAccidents(){

            if($('#show_accidents').is(":checked")){
                document.getElementById('accidents').style.display = "none";
            }
            else{
                document.getElementById('accidents').style.display = "block";
            }
        }
    </script>
</body>

</html>