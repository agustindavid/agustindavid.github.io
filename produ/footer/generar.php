<?php
    $facebook=$_POST['facebook']; 
    $facebook_text=$_POST['facebook_text']; 
    $twitter=$_POST['twitter']; 
    $twitter_text=$_POST['twitter_text']; 
    $linkedin=$_POST['linkedin']; 
    $produ_facebook=$_POST['produ_facebook']; 
    $produ_twitter=$_POST['produ_twitter']; 
    $produ_youtube=$_POST['produ_youtube']; 
    $produ_instagram=$_POST['produ_instagram']; 
    
?>
<table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 710px;margin: 0 auto;text-align: inherit"><tbody><tr style="vertical-align: top"><td width="100%" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"><table cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF" class="block-grid " style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 710px;color: #000000;background-color: #FFFFFF"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #FFFFFF;text-align: center;font-size: 0"><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
      <div style="color:#555555;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
      	<div style="font-size:12px;line-height:18px;color:#555555;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 16px; line-height: 24px;"><em><span style="line-height: 24px; font-size: 16px;"><strong>SHARE</strong></span></em></span></p></div>
      </div>
    </td>
  </tr>
</tbody></table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
  <tbody><tr style="vertical-align: top">
    <td align="center" valign="top" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
      <table border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
        <tbody><tr style="vertical-align: top">
          <td align="center" valign="top" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;max-width: 161px">

            
            <table width="100%" align="left" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
              <tbody><tr style="vertical-align: top">
                <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">


                  <table align="left" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 20px 5px 0">
                    <tbody><tr style="vertical-align: top">
                      <td width="52" align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $facebook ?>&title=<?php echo $facebook_text ?>" target="_blank">
                          <img src="https://dl.dropboxusercontent.com/u/20929799/hello/facebook%402x.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important">
                        </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <table align="left" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 20px 5px 0">
                    <tbody><tr style="vertical-align: top">
                      <td width="52" align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="http://twitter.com/share?url=<?php echo $twitter ?>;text=<?php echo $twitter_text ?>" target="_blank">
                          <img src="https://dl.dropboxusercontent.com/u/20929799/hello/twitter%402x.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important">
                        </a>
                      </td>
                    </tr>
                  </tbody></table>
                  <table align="left" border="0" cellspacing="0" cellpadding="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 20px 5px 0">
                    <tbody><tr style="vertical-align: top">
                      <td width="52" align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <a href="https://www.linkedin.com/cws/share?url=<?php echo $linkedin; ?>" title="LinkedIn" target="_blank">
                          <img src="https://dl.dropboxusercontent.com/u/20929799/hello/linkedin%402x.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important">
                        </a>
                      </td>
                    </tr>
                  </tbody></table>

                </td>
              </tr>
            </tbody></table>
            
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
</td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table>
<table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
                <tbody><tr style="vertical-align: top">
                  <td width="100%" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent">
                    
                    
                    <table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 710px;margin: 0 auto;text-align: inherit"><tbody><tr style="vertical-align: top"><td width="100%" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"><table cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF" class="block-grid " style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 710px;color: #000000;background-color: #FFFFFF"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #FFFFFF;text-align: center;font-size: 0"><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0;border-collapse: collapse;vertical-align: top"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 16px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif"> <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;background-color: #FFFFFF" cellpadding="0" cellspacing="0" align="center" width="100%" border="0">
                <tbody><tr style="vertical-align: 1px”>
                  <td style=">
                    
                    
                    </tr></tbody></table><table class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 700px;margin: 0 auto;text-align: inherit" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%"><table class="block-grid" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 700px;color: #333;background-color: transparent" cellpadding="0" cellspacing="0" width="100%" bgcolor="transparent"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;font-size: 0"><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" align="center" width="100%" border="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 1px;padding-right: 0px;padding-bottom: 2px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 2px;padding-left: 10px">
        <div style="color:#B8B8C0;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">            
        	<div style="font-size:12px;line-height:14px;color:#B8B8C0;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 11px; line-height: 13px; color: rgb(184, 184, 192);"><strong><a style="color:#0000FF;text-decoration: none; font-size: 11px; line-height: 13px; color: #b8b8c0;" href="http://www.produ.com" target="_blank">PRODU.COM</a> <span style="color: rgb(255, 204, 0); font-size: 11px; line-height: 13px;">&nbsp;</span><span style="font-size: 11px; line-height: 13px;"><span style="color: rgb(255, 204, 0); font-size: 11px; line-height: 13px;">| <span style="color: rgb(153, 51, 0); font-size: 11px; line-height: 13px;"><a style="color:#0000FF;text-decoration: none;color: rgb(184, 184, 192); font-size: 11px; line-height: 13px;" href="http://www.produ.com/television/index.html" target="_blank"><span style="color: rgb(184, 184, 192); font-size: 11px; line-height: 13px;">TELEVISI&Oacute;N</span>&nbsp;</a></span>&nbsp;|&nbsp;&nbsp;</span> <a style="color:#0000FF;text-decoration: none;font-size: 11px; line-height: 13px; color: rgb(184, 184, 192);" href="http://www.produ.com/tecnologia/" target="_blank"><span style="color: rgb(184, 184, 192); font-size: 11px; line-height: 13px;"> TECNOLOG&Iacute;A</span></a></span><a style="color:#0000FF;text-decoration: none;font-size: 11px; line-height: 13px; color: rgb(184, 184, 192);" href="http://www.produ.com/tecnologia/" target="_blank">&nbsp;</a> <span style="color: rgb(255, 204, 0); font-size: 11px; line-height: 13px;">&nbsp;</span><span style="font-size: 11px; line-height: 13px;"><span style="color: rgb(255, 204, 0); font-size: 11px; line-height: 13px;">|</span> &nbsp;</span> <a style="color:#0000FF;text-decoration: none; font-size: 11px; line-height: 13px; color: rgb(184, 184, 192);" href="http://www.produ.com/publicidad/" target="_blank">PUBLICIDAD&nbsp;</a>&nbsp;<span style="font-size: 11px; line-height: 13px;"><span style="color: rgb(255, 204, 0); font-size: 11px; line-height: 13px;"> |</span>&nbsp;&nbsp;<a style="color:#0000FF;text-decoration: none; font-size: 11px; line-height: 13px; color: rgb(184, 184, 192);" href="http://corp.produ.com/" target="_blank">&iquest;QUI&Eacute;NES SOMOS?</a></span></strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>

<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center" valign="top">
      <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr style="vertical-align: top">
          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;text-align: center;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px;max-width: 230px" align="center" valign="top">

            
            <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" align="left" cellpadding="0" cellspacing="0" border="0">
              <tbody><tr style="vertical-align: top">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="left" valign="middle">

                    <?php if($produ_facebook){ ?>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="https://www.facebook.com/<?php echo $produ_facebook ?>" title="Facebook" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="https://dl.dropboxusercontent.com/u/20929799/nuevo1%27/facebook.png" alt="Facebook" title="Facebook" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                    <?php }?>
                    <?php if($produ_twitter){ ?>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="http://twitter.com/<?php echo $produ_twitter ?>" title="Twitter" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="https://dl.dropboxusercontent.com/u/20929799/nuevo1%27/twitter.png" alt="Twitter" title="Twitter" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                     <?php }?>
                    <?php if($produ_youtube){ ?>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="http://www.youtube.com/<?php echo $produ_youtube ?>" title="YouTube" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="https://dl.dropboxusercontent.com/u/20929799/nuevo1%27/youtube.png" alt="YouTube" title="YouTube" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>
                      <?php }?>
                    <?php if($produ_instagram){ ?>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr style="vertical-align: top">
                          <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="37" align="left" valign="middle">
                            <a href="http://www.instagram.com/<?php echo $produ_instagram ?>" title="Instagram" target="_blank">
                                <img style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block;border: none;height: auto;line-height: 100%;max-width: 32px !important" src="https://dl.dropboxusercontent.com/u/20929799/nuevo1%27/instagram.png" alt="Instagram" title="Instagram" width="32">
                            </a>
                          </td>
                      </tr>
                  </tbody></table>  <?php }?>
                  <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;padding: 0 5px 5px 0" align="left" border="0" cellspacing="0" cellpadding="0">
                                                 
                          </table></td>
                      </tr>
                  </tbody></table>

                </td>
              </tr>
            </tbody></table>
            
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table><table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 0px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#B8B8C0;line-height:150%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">            
        	<div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 12px;line-height: 18px;text-align: center"><span style="font-size: 12px; line-height: 18px;">    </span></p></div></div></td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody><tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
            <div style="height: 0px;">
                <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;border-top: 0px solid transparent;width: 100%" align="center" border="0" cellspacing="0">
                    <tbody><tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" align="center"></td>
                    </tr>
                </tbody></table>
            </div>
        </td>
    </tr>
</tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
                    
                    </td></tr></tbody></table>
</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
<table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top">
                <tbody><tr style="vertical-align: top">
                  <td width="100%" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent">
                    
                    
                    <table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" class="container" style="border-spacing: 0;border-collapse: collapse;vertical-align: top;max-width: 710px;margin: 0 auto;text-align: inherit"><tbody><tr style="vertical-align: top"><td width="100%" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"><table cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF" class="block-grid " style="border-spacing: 0;border-collapse: collapse;vertical-align: top;width: 100%;max-width: 710px;color: #000000;background-color: #FFFFFF"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: #FFFFFF;text-align: center;font-size: 0"><div class="col num12" style="display: inline-block;vertical-align: top;width: 100%"><table cellpadding="0" cellspacing="0" align="center" width="100%" border="0" style="border-spacing: 0;border-collapse: collapse;vertical-align: top"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;background-color: transparent;padding-top: 5px;padding-right: 0px;padding-bottom: 5px;padding-left: 0px;border-top: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-left: 0px solid transparent"><table cellpadding="0" cellspacing="0" width="100%" style="border-spacing: 0;border-collapse: collapse;vertical-align: top"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 16px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif"><div class="our-class"> </div>

</td></tr><tr><td>
<center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="canspamBar">
<tbody><tr>
<td align="center" valign="top" style="color:#606060; font-family:Helvetica, Arial, sans-serif; font-size:11px; line-height:150%; padding-right:20px; padding-bottom:5px; padding-left:20px; text-align:center;">
This email was sent to <a href="mailto:*|EMAIL|*" target="_blank" style="color:#404040 !important;">*|EMAIL|*</a>   
<a href="*|UPDATE_PROFILE|*" style="color:#404040 !important;">Unsubscribe</a>
<br>
Remove me from Diario <a href="*|UNSUB|*" style="color:#404040 !important;text-decoration:none;">here</a>    <a href="*|ABOUT_LIST|*" target="_blank" style="color:#404040 !important;text-decoration:none;"><em>why did I get this?</em></a>    <a href="*|UPDATE_PROFILE|*" style="color:#404040 !important;text-decoration:none;">Preferences</a>   <a href="*|FORWARD|*" style="color:#404040 !important;text-decoration:none;">Forward</a>
<br>
*|LIST:ADDRESSLINE|*
</td>
</tr>
</tbody></table>
</center>
</td></tr>

</tbody></table></td></tr></tbody></table>
</div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>