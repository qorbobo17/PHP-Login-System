<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System</title>
	<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />

</head>
<body>
	
	<div class="uk-section uk-container">
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-login">

		    <div class="uk-margin">
		        <label class="uk-form-label" for="form-stacked-text">Email</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="Enter your email">
		        </div>
		    </div>
		     <div class="uk-margin">
		        <label class="uk-form-label" for="form-stacked-text">Password</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Enter your password">
		        </div>
		    </div>
	    
			<div class="uk-margin">
				<button class="uk-button uk-button-secondary" type="submit">
					Login
				</button>
			</div>

			</form>
		</div>
	</div>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>

</body>
</html>