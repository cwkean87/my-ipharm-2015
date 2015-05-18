<header class="fixed" style="z-index:98;display:inline-flex;">
    <div class="header-row">

        <div class="ten columns" style="width:80%;">

            <ion:page:title tag="h3"/>

            <!-- Page's subtitle -->
            <ion:page:subtitle tag="h4"/>

        </div>

  </div>
  <ion:user:logged is="true">
          <div class="logout-button">
          <form method="post" action="">
            <input type="hidden" name="form" value="logout" />
            <input type="submit" class="button logout" value="<ion:lang key='form_button_logout' />" />
          </form>
          </div>
  </ion:user:logged>
  <ion:user:logged is="false">
          <div class="logout-button">
          <a class="button logout" href="http://pharmfair.com/ipharm">Log In</a>
          </div>
  </ion:user:logged>
</header>
