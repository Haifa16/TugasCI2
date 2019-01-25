<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
		@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
        @import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

        .hm-gradient {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
        }
        .darken-grey-text {
            color: #2E2E2E;
        }
        .danger-text {
            color: #ff3547; 
        }
        .default-text {
        color: #2BBBAD;
        }
        .info-text {
        color: #33b5e5;
        }
        .form-white .md-form label {
        color: #fff;
        }
        .form-white input[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #fff;
        -webkit-box-shadow: 0 1px 0 0 #fff;
        box-shadow: 0 1px 0 0 #fff;
        }
        .form-white input[type=text]:focus:not([readonly]) + label {
        color: #fff;
        }
        .form-white input[type=password]:focus:not([readonly]) {
        border-bottom: 1px solid #fff;
        -webkit-box-shadow: 0 1px 0 0 #fff;
        box-shadow: 0 1px 0 0 #fff;
        }
        .form-white input[type=password]:focus:not([readonly]) + label {
        color: #fff;
        }
        .form-white input[type=password], .form-white input[type=text] {
        border-bottom: 1px solid #fff;
        }
        .form-white .form-control:focus {
        color: #fff;
        }
        .form-white .form-control {
        color: #fff;
        }
        .form-white textarea.md-textarea:focus:not([readonly]) {
        border-bottom: 1px solid #fff;
        box-shadow: 0 1px 0 0 #fff;
        color: #fff;
        }
        .form-white textarea.md-textarea {
        border-bottom: 1px solid #fff;
        color: #fff;
        }
        .form-white textarea.md-textarea:focus:not([readonly])+label {
        color: #fff;
        }
        .ripe-malinka-gradient {
        background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
        }
        .near-moon-gradient {
        background-image: linear-gradient(to bottom, #5ee7df 0%, #b490ca 100%);
        }
    </style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-4 mt-5 pt-5 offset-md-3">
				<div class="card ripe-malinka-gradient form-white">
					<div class="card-body">
						<!-- Form register -->
						<!-- validation message for a successful login -->
						<?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?= $this->session->flashdata('error'); ?>
                            </div>
                        <?php  endif; ?>
						<!-- validation messages for taking inputs -->
						<?= validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>
						<form action="loginUser" method="POST">
							<h2 class="text-center font-up font-bold py-4 white-text">Sign up</h2>
							<div class="md-form">
								<i class="fa fa-user prefix white-text"></i>
								<input type="text" id="orangeForm-name2" class="form-control" name="username">
								<label for="orangeForm-name2">Your Username</label>
							</div>
							<div class="md-form">
								<i class="fa fa-lock prefix white-text"></i>
								<input type="password" id="orangeForm-pass2" class="form-control" name="password">
								<label for="orangeForm-pass2">Your password</label>
							</div>
							<div class="text-center">
								<button class="btn btn-outline-white waves-effect waves-light" type="submit">LOGIN</button>
							</div>
						</form>
						<!-- Form register -->
					</div>
				</div>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
</body>
</html>