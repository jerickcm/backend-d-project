<!DOCTYPE html>
<html>
<head>
<title>Deloitte Rewards App Responsive Email Template</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
@media screen {
  @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');

}
    /* CLIENT-SPECIFIC STYLES */
    /* :400,400i,700,700i */
    /* body {
      background-color: #F5F5F5;
    }

    .wrapper {
      background-color: #ffffff;
    } */

    body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Calibri, Geneva, Tahoma, sans-serif; } /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
    img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
    table{border-collapse: collapse !important; fon}
    body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    .fluid{
			max-width:100% !important;
			height:auto !important;
			margin-left:auto !important;
			margin-right:auto !important;
		}

    .banner-desktop{
			display:block !important;
		}
		.banner-mobile{
			display:none !important;
		}

    @media screen and (max-width: 565px) {

      .obm-remove-padding {
        padding-bottom: 0px !important;
      }

      .banner-desktop{
  			display:none !important;
  		}
  		.banner-mobile{
  			display:block !important;
  		}

    }

    @media screen and (max-width: 551px) {

      .mff-mobile {
        margin: 8px 0px 0px 0px !important;
      }

    }

    @media screen and (max-width: 530px){

    		.two-item{
    			width:100% !important;
    			float:left !important;
    		}

        .two-item-v2 {
          width:50% !important;
    			float: left !important;
          text-align: center !important;
        }

        .two-item-v2-inner {
          text-align: center !important;
        }

        .four-item-mp{
    			float:left !important;
    			width:48% !important;
    			margin-bottom:0;
    		}

        .two-item-inner-left {
          width: 18% !important;
        }

        .two-item-inner-right {
          width: 65% !important;
        }

        .two-item-holder {
          padding: 0px 20px 0px 20px;
        }

        .argentina-link {
           margin: 8px 0px 0px 0px !important;
        }

    }

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {



        /* ALLOWS FOR FLUID TABLES */
        .wrapper {
          width: 100% !important;
        	max-width: 100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        .logo img {
          margin: 0 auto !important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        .mobile-hide {
          display: none !important;
        }

        .mobile-show {
          display: block !important;
        }

        .img-max {
          max-width: 100% !important;
          width: 100% !important;
          height: auto !important;
        }

        /* FULL-WIDTH TABLES */
        .responsive-table {
          width: 100% !important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        .padding {
          padding: 10px 5% 15px 5% !important;
        }

        .padding-meta {
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        .no-padding {
          padding: 0 !important;
        }

        .section-padding {
          padding: 50px 15px 50px 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        .mobile-button-container {
            margin: 0 auto;
            width: 100% !important;
        }

        .mobile-button {
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
            display: block !important;
        }

    }


    @media screen and (max-width: 570px) {

      .one-col-mobile {
        width: 100% !important;
        float: left !important;
        margin-bottom: 20px !important;
      }

      .one-col-mobile-l {
        width: 35% !important;
      }

      .one-col-mobile-r {
        width: 55% !important;
      }

      .one-col-mobile-l-img {
        width: 90% !important;
      }

    }



    @media screen and (max-width: 500px) {

      .comfi-container {
        width: 100% !important;
        text-align: center !important;
        float: left !important;
        margin: 10px 0px 10px 0px !important;
      }

      .flc-title {
        margin: 0px 0px 10px 0px !important;
        font-size: 14px !important;
        line-height: 20px !important;
        color:#666666 !important;
        font-family:Calibri, Geneva, sans-serif !important;
      }

      .footer-logo-collection {
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .center-on-mobile-footer {
        width: 100% !important;
        float: left !important;
        text-align: center !important;
      }

      .center-on-mobile-footer-img {
        text-align: center !important;
        float: none !important;
      }

      .flc-footer-para {
        text-align: center !important;
      }


    }

    @media screen and (max-width: 480px) {

      /* .two-item-v2 {
        width:100% !important;
        float:left !important;
        text-align: left !important;
      }

      .two-item-v2 p {
        text-align: left !important;
      } */


      .three-item {
        width:100% !important;
      }

      .footer-img {
        width: 120px !important;
      }

      .poweredby {
        margin-top: 20px !important;
      }

      .one-col-mobile-l {
        width: 100% !important;
        text-align: center !important;
        padding: 12px 0px 0px 0px !important;
      }

      .one-col-mobile-r {
        width: 100% !important;
        text-align: center !important;
        padding: 0px 0px 12px 0px !important;
      }

      .one-col-mobile-l-img {
        width: 50% !important;
      }

    }

    @media screen and (max-width: 400px) {

      .two-item-inner-left {
        width: 30% !important;
      }

      .two-item-inner-right {
        width: 60% !important;
      }


    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>



<!--[if gte mso 9]>
<style type="text/css">
  .outlook-style-gray-border {
  border-bottom:solid 1px #cacacb !important;
  padding:0px 0px 8px 0px !important;
  width:100% !important;
  font-size:0px !important;
  }

  .outlook-style-top-links {
  font-size:11px !important;
  line-height:20px !important;
  }

  .argentina-link {
  margin:48px 0px 10px 0px !important;
  }

  .mff-mobile {
  margin: 8px 0px 0px 0px !important;
  }

  .signature-outlook {
    margin: 12px 0px 0px 0px !important;
  }

  </style>
  <![endif]-->

    <!--[if gte mso 15]>
  <style type="text/css">
  .outlook-style-gray-border {
  border-bottom:solid 1px #cacacb !important;
  padding:0px 0px 8px 0px !important;
  width:100% !important;
  font-size:0px !important;
  }

  .outlook-style-top-links {
  font-size:11px !important;
  line-height:20px !important;
  }

  .argentina-link {
  margin:32px 0px 0px 0px !important;
  }

  .mff-mobile {
  margin: 8px 0px 0px 0px !important;
  }
</style>
<![endif]-->


</head>
<body bgcolor="#F5F5F5" style="margin: 0 !important; padding: 0 !important;">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
  Personal growth achievement, new badges, and ACE portal reminders! Review your ACE portal activity now!
</div>

<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td bgcolor="#e6e6e6" style="padding: 14px 20px 14px 20px;">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td width="10%" style="margin:0;text-align:left;color:#808080;font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif; font-size:13px; font-weight: 700;">
                          <p></p>
                        </td>

                        <td width="90%" style="margin:0;text-align:right;color:#808080;font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif; font-size:13px; font-weight: 400;">
                          Having trouble viewing this e-mail? <a style="color:#808080;text-decoration:none !important;" href="{{$webPreviewLink}}" target="_blank">Click here</a>.
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td valign="middle" align="left" style="text-align:left;padding:0;margin:0;width:100%;" class="fluid">
                    <span>
                      <img src="{{$imgFolderUrl}}/top-banner.jpg" width="640" style="float: left; width: 100%; border: 0 !important; outline: 0 !important; border-style: none !important;" alt="Deloitte" class="fluid">
                    </span>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td bgcolor="#ffffff">
                    <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td style="padding:16px 6% 18px 6%;color:#808080;font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif;font-size:15px; line-height: 25px;text-align:left; font-weight: 400;">
                          Singapore | {{ $date }}
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td valign="middle" align="left" style="text-align:left;padding:0;margin:0;width:100%;" class="fluid">
                    <span>
                      <a href="{{ config('ace.url') }}">
                        <img src="{{$imgFolderUrl}}/main-banner.jpg" width="640" style="float: left; width: 100%; border: 0 !important; outline: 0 !important; border-style: none !important;" alt="ACE Deloitte" class="fluid">
                      </a>
                    </span>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td valign="middle" align="left" style="text-align:left;padding:2px 0px 0px 0px;margin:0;width:100%;" class="fluid">
                    <span>
                      <img src="{{$imgFolderUrl}}/welcome-banner-1.jpg" width="640" style="float: left; width: 100%; border: 0 !important; outline: 0 !important; border-style: none !important;" alt="A.C.E. Monthly summary report" class="fluid">
                    </span>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td bgcolor="#ffffff" style="padding:0px 0px 0px 0px;color:#e6e6e6;font-family:'Open Sans', 'Roboto', Helvetica, Arial, sans-serif;">
                    <p class="outlook-style-gray-border" style="margin:0;font-size:0px !important;line-height:0px !important;text-align:left; border-bottom: solid 4px #86BC25;padding: 0px 0px 0px 0px;">
                     .
                   </p>
                   <br>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td bgcolor="#ffffff">
                    <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td style="padding:2px 6% 25px 6%;color:#808080;font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif;font-size:15px; line-height: 22px;text-align:left; font-weight: 400;">
                          Hi {{ $name }},
                          <br><br>
                          This is the latest summary of your ACE account.
                          <br><br>
                          <b>Personal growth achievements</b>
                          <br><br>
                          @if ('none' != strtolower($currentTier))
                          You are currently a {{ $currentTier }}!
                          <br><br>
                          @endif

                            @if (1 < $pointsToNextTier)
                                Continue to keep up the good work as you are just {{ $pointsToNextTier }} points away from becoming a {{ $nextTier }}!
                            @else
                                Continue to keep up the good work as you are just {{ $pointsToNextTier }} point away from becoming a {{ $nextTier }}!

                            @endif

                          <br><br>
                          <p>
                            <table align="left" cellspacing="0" cellpadding="5" border="0" width="100%" style="padding: 0px 20px 0px 20px;">
                              <tr>
                                <td class="one-col-mobile" style="width: 45%; float: left; border: 1px solid #999999; padding: 0px;">
                                  <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td style="padding: 10px 10px 10px 10px;">
                                        <b style="font-family: Calibri, Geneva, Tahoma, sans-serif">Received badges this month</b>
                                      </td>
                                    </tr>

                                    <tr style="border-top: 1px solid #999999;">
                                      <td>
                                        <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                          @if ($badgesTotalReceived)
                                            @foreach ($badges as $badge)
                                              @if ($badge->received)
                                                <tr style="border-bottom: 1px solid #999999;">
                                                  <td class="one-col-mobile-l" width="25%" style="float: left;padding: 10px;">
                                                    <img class="one-col-mobile-l-img" src="{{$badge->image_url}}" width="75" style="width: 75px;" />
                                                  </td>
                                                  <td class="one-col-mobile-r" width="55%" style="float: right;padding: 20px 10px 0px 10px;">
                                                    @if (strtolower($badge->name) == 'worldclass citizen')
                                                    World<em>Class</em> Citizen
                                                    @else
                                                    {{ $badge->name }}
                                                    @endif
                                                    <br>
                                                    Count: {{ $badge->received ? $badge->received : 0 }}
                                                  </td>
                                                </tr>
                                              @endif
                                            @endforeach
                                          @else
                                            <tr style="border-bottom: 1px solid #999999;">
                                              <td class="one-col-mobile-l" width="25%" style="float: left;padding: 10px;">0</td>
                                            </tr>
                                          @endif
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>

                                <td class="one-col-mobile" style="width: 45%; float: right; border: 1px solid #999999; padding: 0px;">
                                  <table style="font-family: Calibri, Geneva, Tahoma, sans-serif" align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td style="padding: 10px 10px 10px 10px;">
                                        <b style="font-family: Calibri, Geneva, Tahoma, sans-serif">Shared badges this month</b>
                                      </td>
                                    </tr>

                                    <tr style="border-top: 1px solid #999999;">
                                      <td>
                                        <table style="font-family: Calibri, Geneva, Tahoma, sans-serif" align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                          @if ($badgesTotalSent)
                                            @foreach ($badges as $badge)
                                              @if ($badge->sent)
                                                <tr style="border-bottom: 1px solid #999999;">
                                                  <td class="one-col-mobile-l" width="25%" style="float: left;padding: 10px;">
                                                    <img class="one-col-mobile-l-img" src="{{$badge->image_url}}" width="75" style="width: 75px;" />
                                                  </td>
                                                  <td class="one-col-mobile-r" width="55%" style="float: right;padding: 20px 10px 0px 10px;">
                                                    @if (strtolower($badge->name) == 'worldclass citizen')
                                                    World<em>Class</em> Citizen
                                                    @else
                                                    {{ $badge->name }}
                                                    @endif
                                                    <br>
                                                    Count: {{ $badge->sent ? $badge->sent : 0 }}
                                                  </td>
                                                </tr>
                                              @endif
                                            @endforeach
                                          @else
                                            <tr style="border-bottom: 1px solid #999999;">
                                              <td class="one-col-mobile-l" width="25%" style="float: left;padding: 10px;">0</td>
                                            </tr>
                                          @endif
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </p>
                          <p>&nbsp;</p>
                          <b>Balance tokens:</b>
                          <br>
                          <p>
                            <table style="font-family: Calibri, Geneva, Tahoma, sans-serif" align="left" cellspacing="0" cellpadding="5" border="0" width="100%" style="padding: 0px 20px 0px 20px;">
                              <tr>
                                <td class="one-col-mobile" style="width: 45%; float: left; border: 1px solid #999999; padding: 0px;">
                                  <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td style="padding: 10px 10px 10px 10px;">
                                        <b style="font-family: Calibri, Geneva, Tahoma, sans-serif">"Recognise Others" tokens</b>
                                      </td>
                                    </tr>

                                    <tr style="border-top: 1px solid #999999;">
                                      <td style="padding: 10px 10px 10px 10px;">
                                        {{ $recognizeOthersToken }}
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="one-col-mobile" style="width: 45%; float: right; border: 1px solid #999999; padding: 0px;">
                                  <table style="font-family: Calibri, Geneva, Tahoma, sans-serif" align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                      <td style="padding: 10px 10px 10px 10px;">
                                        <b style="font-family: Calibri, Geneva, Tahoma, sans-serif">"My Rewards" tokens</b>
                                      </td>
                                    </tr>

                                    <tr style="border-top: 1px solid #999999;">
                                      <td style="padding: 10px 10px 10px 10px;">
                                        {{ $myRewardsToken }}
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </p>
                          <p>&nbsp;</p>
                          <b>Your "Recognise Others" tokens</b>
                          <br><br>
                          For the month of {{ $month }}, You gave out a total of {{ $recognizeOthersTokenUsed }} "Recognise Others" tokens.
                          <br><br>
                          You have {{ $recognizeOthersToken }} "Recognise Others" tokens remaining, which will expire on {{ $recognizeOthersTokenExpiration }}.
                          <br><br>
                          Remember, you can use ACE to show your appreciation to your colleagues. A small gesture goes a long way!
                          <br><br>
                          <b>Your "My Rewards" tokens</b>
                          <br><br>
                          For the month of {{ $month }}, you received {{ $myRewardsToken }} “My Rewards” tokens from your colleagues and you redeemed a total of {{ $myRewardsTokenUsed }} tokens from the ACE Redemption Store.
                          <br><br>
                          You have a total of {{ $myRewardsToken }} "My Rewards" tokens.
                          @if ($myRewardsToken)
                          {{ $myRewardsTokenExpirationAmount }} tokens will expire on {{ $myRewardsTokenExpiration }}.
                          @endif
                          <br><br>
                          Be sure to exchange these tokens for exciting gifts available on the <a style="color:#86BC25;text-decoration:none;" target="_blank" href="{{$aceStoreLink}}">ACE e-Store</a>!
                          <br><br>
                          To view a full summary of your ACE account, click <a style="color:#86BC25;text-decoration:none;" target="_blank" href="{{$historyLink}}">here</a>.
                          <br><br>
                          Click <a href="{{ config('ace.url') }}">here</a> to access ACE now!
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="640">
            <tr>
            <td align="center" valign="top" width="640">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;" class="wrapper">
                <tr>
                  <td bgcolor="#e6e6e6">
                    <table align="left" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td style="padding:20px 6% 22px 6%;color:#808080;font-family: Calibri, 'Roboto', Helvetica, Arial, sans-serif;font-size:10px;line-height:16px;text-align:left; font-weight: 400;">
                          <div class="footer-para" style="margin:0;">
                            Please do not reply to this email. For any questions, please submit your enquiry or refer to the FAQ <a href="{{ config('ace.url') }}/faq">here</a>.
                              <br><br>
                              Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited (“DTTL”), its global network of member firms, and their related entities. DTTL (also referred to as “Deloitte Global”) and each of its member firms and their affiliated entities are legally separate and independent entities. DTTL does not provide services to clients. Please see <a style="color:#86BC25;text-decoration:none;" href="https://www.deloitte.com/about" target="_blank">www.deloitte.com/about</a> to learn more.
                              <br><br>
                              This communication is for internal distribution and use only among personnel of Deloitte Touche Tohmatsu Limited, its member firms, and their related entities (collectively, the “Deloitte network”). None of the Deloitte network shall be responsible for any loss whatsoever sustained by any person who relies on this communication.
                              <br><br>
                            &copy; 2020 Deloitte & Touche LLP
                          </div>
                          </td>
                        </tr>
                      </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>

</table>
</body>
</html>
