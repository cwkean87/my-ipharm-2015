<ion:partial view="header" />

<ion:partial view="page_header" />
<div class="ss-form-container">
  <div class="ss-top-of-page">
   
  </div>
  <div class="ss-form">
  <div id="test"></div>
  <script type="text/javascript">
      var submitted = false;
      var myLink = "http://pharmfair.com/ipharma/confirmation";  
    </script>
  <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted){window.location=myLink;}"></iframe>
    <form action="https://docs.google.com/forms/d/1OsIopjstBJ-Yv7p968KJBLOa1qkhCC27bmkK5B9bOVQ/formResponse" target="hidden_iframe" id="ss-form" method="post" onsubmit="{submitted=true}">
      <ol role="list" class="ss-question-list" style="padding-left: 0">
        <div class="ss-form-question errorbox-good" role="listitem" style="width:20%;">
          <div dir="ltr" class="ss-item  ss-text">
            <div class="ss-form-entry">
              <label class="ss-q-item-label" for="entry_4789232">
                <div class="ss-q-title">
                  Informed by:
                </div>
                <div class="ss-q-help ss-secondary-text" dir="ltr">
                </div>
              </label>
              <input type="text" name="entry.4789232" value="<ion:user:form:profile:field:screen_name />" class="ss-q-short" id="entry_4789232" dir="auto" aria-label="Informed by:  " title="">
              <div class="error-message" id="1762687592_errorMessage">
              </div>
              <div class="required-message">
                This is a required question
              </div>
            </div>
          </div>
        </div>
        
        <div class="ss-form-question errorbox-good" role="listitem" style="width:20%;">
          <div dir="ltr" class="ss-item  ss-text">
            <div class="ss-form-entry">
              <label class="ss-q-item-label" for="entry_2032592713">
                <div class="ss-q-title">
                  Name or any identifier of the entry:
                </div>
                <div class="ss-q-help ss-secondary-text" dir="ltr">
                </div>
              </label>
              <input type="text" name="entry.2032592713" value="" class="ss-q-short" id="entry_2032592713" dir="auto" aria-label="Name and ID of Merged Entry:  " title="">
              <div class="error-message" id="1490303616_errorMessage">
              </div>
              <div class="required-message">
                This is a required question
              </div>
            </div>
          </div>
        </div>
        
        <div class="ss-form-question errorbox-good" role="listitem" style="width:50%;">
          <div dir="ltr" class="ss-item  ss-radio">
            <div class="ss-form-entry">
              <label class="ss-q-item-label" for="entry_2007898393">
                <div class="ss-q-title">
                  Remarks
                </div>
                <div class="ss-q-help ss-secondary-text" dir="ltr">
                </div>
              </label>
              
              <ul class="ss-choices" role="radiogroup" aria-label="Remarks  ">
                <li class="ss-choice-item">
                  <label>
                    <span class="ss-choice-item-control goog-inline-block">
                      <input type="radio" name="entry.872790208" value="Duplicate" id="group_872790208_1" role="radio" class="ss-q-radio" aria-label="Duplicate">
                    </span>
                    <span class="ss-choice-label">
                      Duplicate
                    </span>
                  </label>
                </li><br/>
                
                <li class="ss-choice-item">
                  <label>
                    <span class="ss-choice-item-control goog-inline-block">
                      <input type="radio" name="entry.872790208" value="Invalid Name" id="group_872790208_2" role="radio" class="ss-q-radio" aria-label="Invalid Name">
                    </span>
                    <span class="ss-choice-label">
                      Invalid Name
                    </span>
                  </label>
                </li><br/>
                
                <li class="ss-choice-item">
                  <label>
                    <span class="ss-choice-item-control goog-inline-block">
                      <input type="radio" name="entry.872790208" value="__other_option__" id="group_872790208_3" role="radio" class="ss-q-radio ss-q-other-toggle">
                    </span>
                    <span class="ss-choice-label">
                      Other:
                    </span>
                  </label>
                  <span class="ss-q-other-container goog-inline-block">
                    <input type="text" name="entry.872790208.other_option_response" value="" class="ss-q-other" id="entry_872790208_other_option_response" dir="auto" aria-label="Other">
                  </span>
                </li>
              </ul>
              <div class="error-message" id="2007898393_errorMessage">
              </div>
              <div class="required-message">
                This is a required question
              </div>
            </div>
          </div>
        </div>
        
        
        <input type="hidden" name="draftResponse" value="[,,"-6365425546666671166"]
">
  <input type="hidden" name="pageHistory" value="0">
  
  
  <input type="hidden" name="fbzx" value="-6365425546666671166">
  
  <div class="ss-item ss-navigate">
    <table id="navigation-table">
      <tbody>
        <tr>
          <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
            <input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  </ol>
  </form>
  </div>
</div>
<ion:partial view="footer" />