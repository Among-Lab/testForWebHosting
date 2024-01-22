<?php include "../lib/head.php"?>
</head>
<body>

	<?php include "../lib/top.php"?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us
                    <small>Help Desk</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="./">Home</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.379734715722!2d128.6138536!3d35.2468076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356f33badea3b22d%3A0x140d5acf9442dfa5!2z7JWE66q97IaU66Oo7IWYKOyjvCk!5e0!3m2!1sko!2skr!4v1673255899166!5m2!1sko!2skr" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0" allowfullscreen></iframe>
				

            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    경남 창원시 의창구 평산로23 <br>
					신화테크노밸리 502호 <br>
					(팔용동 23-7)<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (055) 232-8111</p>
                <p><i class="fa fa-fax"></i> 
                    <abbr title="Fax">F</abbr>: (070) 7614-3111</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:among@among.co.kr">among@among.co.kr</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: <?php echo date("l, Y년 m월 d일 H:i:s");?></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->


	<div class="clearfix"></div>
	<div class="space20"></div>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>유/무선, 이메일로 연락드리겠습니다.</h3>
				<div class="space20"></div>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>이름:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>연락처:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>이메일:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>내용:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">전 송</button>
                </form>
            </div>

        </div>
        <!-- /.row -->



    </div>
    <!-- /.container -->

	<div class="clearfix"></div>
	<div class="space40"></div>

	<?php include "../lib/trail.php"?>