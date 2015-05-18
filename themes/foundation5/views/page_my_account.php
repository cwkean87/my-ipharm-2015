<ion:partial view="header" />
	<ion:user:logged is="true">
		<ion:partial view="page_header" />
      <!-- User not logged in -->
    </ion:user:logged >

        <!-- Articles of this page with the type "not-logged-in" -->
        <ion:page:articles type="not-logged-in">
          <ion:article>
            <ion:title tag="h3" />
            <ion:content />
          </ion:article>
        </ion:page:articles>

        <!--
          LOGIN : Error message
        -->
        <ion:form:login:validation:error is="true" >
          <div class="alert-box alert">
            <ion:lang key="form_alert_error_title" tag="h4" />
            <ion:form:login:validation:error tag="p" />
            <a href="" class="close">×</a>
          </div>
        </ion:form:login:validation:error>


        <!--
          PASSWORD BACK : Success message
        -->
        <ion:form:password:validation:success is="true">
          <div class="alert-box success">
            <ion:lang key="form_alert_success_title" tag="h4" />
            <ion:lang key="form_register_success_message" tag="p" />
            <a href="" class="close">×</a>
          </div>
        </ion:form:password:validation:success>

        <!--
          PASSWORD BACK : Error message
        -->
        <ion:form:password:validation:error is="true" >
          <div class="alert-box alert">
            <ion:lang key="form_alert_error_title" tag="h4" />
            <ion:form:password:validation:error tag="p" />
            <a href="" class="close">×</a>
          </div>
        </ion:form:password:validation:error>

                <ion:user:logged is="false">
			<script>
            $(document).ready(function(){
			
              $(".password-reset").hide();
              $(".togg").click(function(){
              $(".password-reset").toggle('slow');
			  $(".login-form").toggle('slow');
			   var $this = $(this);
				$this.toggleClass("expanded");
				if ($this.hasClass("expanded")) {
				$this.html("Forgot Password?");
				} else {
				$this.html("Log In");
				}
             });
            });
            </script>
          <!-- Login form 
                    <h3><ion:lang key="title_login" /></h3>-->
			<div class="container" style="width:820px !important; margin: -80px auto 0 auto;">
            <form method="post" action="" class="login">
            <input type="hidden" name="form" value="login" />
				<div class="login-screen">
					<div class="login-icon">
					<img src="<ion:theme_url />assets/images/login/icon.png" alt="Welcome to iPharm" />
					<h4>Welcome to <small>iPharm</small></h4>
				</div>
                        <!-- The username is used to log in the user -->
			<div class="login-form">
				<div class="form-group">
				<input type="text" class="form-control login-field" id="username" name="username" value="<ion:form:login:field:username />" required />
				<label class="login-field-icon fui-user" for="username"> Staff ID</label>
				<ion:form:login:error:username tag="p" class="input-error" />
				</div>
				<div class="form-group">
				 <input type="password" class="form-control login-field" id="password" name="password" />
				 <label class="login-field-icon fui-lock" for="password"> <ion:lang key="form_label_password" /></label>
				 <ion:form:login:error:password tag="small" class="error" />
				</div>
				<input type="submit" class="button success" value="<ion:lang key='form_button_login' />" />           
			</div>
			<!-- Password back form -->
				</div>
			<div class="togg expanded">Forget Password?</div>
          </form>
		  <div class="password-reset">
            <form method="post" action="">
                <input type="hidden" name="form" value="password" />
                <label for="email-back"><ion:lang key="form_label_email" /></label>
                <input type="text" name="email" id="email-back" placeholder="Please enter the registered email" />
				<input type="submit"  class="button success" value="Reset" />
            </form>
          </div>
          </div>
			
          
        </ion:user:logged>

            <!-- User logged in -->
        <ion:user:logged is="true">
		    <script>
            $(document).ready(function(){
			
              $(".login-form.change-password").hide();
              $(".togg").click(function(){
              $(".login-form.change-password").toggle('slow');
			   var $this = $(this);
				$this.toggleClass("expanded");
				if ($this.hasClass("expanded")) {
				$this.html("Change Password?");
				} else {
				$this.html("Hide");
				}
             });
            });
            </script>
                <!-- Articles of this page with the type "logged-in" -->
                <ion:page:articles type="logged-in">
                    <ion:article>
                      <h3 style="text-align:center;"><ion:title /> <ion:user:name /></h3>
                        <ion:content />
                    </ion:article>
                </ion:page:articles>
        <!--
          PROFILE : Success message
        -->
        <ion:form:profile:validation:success is="true">
          <div class="alert-box success">
            <ion:lang key="form_alert_success_title" tag="h4" />
            <ion:form:profile:validation:success tag="p" />
            <a href="" class="close">×</a>
          </div>
        </ion:form:profile:validation:success>

        <!--
          PROFILE : Error message
        -->
        <ion:form:profile:validation:error is="true">
          <div class="alert-box alert">
            <ion:lang key="form_alert_error_title" tag="h4" />
            <ion:form:profile:validation:error tag="p" />
            <a href="" class="close">×</a>
          </div>
          
        </ion:form:profile:validation:error>
        <!-- Profile form -->
                <form method="post" action="" class="login-form profile">
                    <input type="hidden" name="form" value="profile" />
				<div class="">
                    <label for="firstname-profile"  <ion:form:profile:error:firstname is='true' return=' class="error"' />>
                      <ion:lang key="form_label_firstname" />
                    </label>
                    <input type="text" name="firstname" id="firstname-profile" value="<ion:user:form:profile:field:firstname />" />
                    <ion:form:profile:error:firstname tag="small" class="error" />

                    <label for="lastname-profile">
                        <ion:lang key="form_label_staffid" />
                    </label>
                    <input readonly style="color:gray;" type="text" name="lastname" id="lastname-profile" value="<ion:user:form:profile:field:lastname />"/>
                    <ion:form:profile:error:lastname tag="small" class="error" />

                    <label for="screen_name-profile">
                        <ion:lang key="form_label_screen_name" />
                    </label>
                    <input type="text" id="screen_name-profile" name="screen_name" value="<ion:user:form:profile:field:screen_name/>" />
                    <ion:form:profile:error:screen_name tag="small" class="error" />
                    <label for="email-profile" <ion:form:profile:error:email is='true' return=' class="error"' /> >
                      <ion:lang key="form_label_email" />
                    </label>
                    <input type="text" name="email" id="email-profile" value="<ion:user:form:profile:field:email />" />
                    <ion:form:profile:error:email tag="small" class="error" />
					<div class="login-form change-password">
						<p class="note" style="color:red"><ion:lang key="form_note_password_change" /></p>
								<input type="password" name="password" id="password-profile" />
								<ion:form:profile:error:password tag="small" class="error" />
								<label for="password-confirm-profile">
									<ion:lang key="form_label_password_confirmation" />
								</label>
								<input type="password" name="password2" id="password-confirm-profile" />
								<ion:form:profile:error:password tag="small" class="error" />
					</div>
			</div>
			<div class="togg expanded">Change Password</div>
			<input type="submit" class="button success" value="<ion:lang key='form_button_save_profile' />" />
            </form>

      </ion:user:logged>

<ion:partial view="footer" />