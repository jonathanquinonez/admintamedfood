<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Alerta de Monto</title>





</head>

<body>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bitu</title>
  </head>

  <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
  style="margin: 0pt auto; padding: 0px; background:#F4F7FA;">
    <table id="main" width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"
    bgcolor="#F4F7FA">
      <tbody>
        <tr>
          <td valign="top">
            <table class="innermain" cellpadding="0" width="580" cellspacing="0" border="0"
            bgcolor="#F4F7FA" align="center" style="margin:0 auto; table-layout: fixed;">
              <tbody>
                <!-- START of MAIL Content -->
                <tr>
                  <td colspan="4">
                    <!-- Logo start here -->
                    <table class="logo" width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                        <tr>
                          <td valign="top" align="center">
                            <a href="https://www.bitu.com.co" style="display:inline-block; cursor:pointer; text-align:center;">
                              <img src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/Logo.png"
                              height="35" width="77" border="0" alt="Bitu">
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2" height="30"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Logo end here -->
                    <!-- Main CONTENT -->
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
                    style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                      <tbody>
                        <tr>
                          <td height="40"></td>
                        </tr>
                        <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
                          <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
                              <tbody>
                                <tr>
                                  <td align="center" valign="bottom" colspan="2" cellpadding="3">
                                    <img alt="alerta" width="80" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/alerta.png"
                                    />
                                  </td>
                                </tr>
                                <tr>
                                  <td height="30" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-family: 'Ubuntu', sans-serif;font-size:25px;line-height: 24px;">
          Alerta de Monto
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td height="1" bgcolor="#DAE1E9"></td>
                                </tr>
                                <tr>
                                  <td height="24" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
          El siguiente usuario se le ha asignado un monto que supera el limite permitido por la entidad.
        </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center" style="color:#48545d;font-size:14px;line-height:24px;">
                                      <li style="list-style: none">Nombre del Usuario:</li>
                                      <li style="list-style: none"><b>{{$user->nombre}}</b></li>
                                  </td>
                                </tr>
                                  <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                  <tr>
                                  <td align="center" style="color:#48545d;font-size:14px;line-height:24px;">
                                      <li style="list-style: none">N&uacute;mero de Identificaci&oacute;n:</li>
                                      <li style="list-style: none"><b>{{$emp->cedula}}</b></li>
                                  </td>
                                </tr>
                                <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                  <tr>
                                  <td align="center" style="color:#48545d;font-size:14px;line-height:24px;">
                                      <li style="list-style: none">Cupo Aprobado:</li>
                                      <li style="list-style: none"><b>{{$emp->monto}}</b></li>
                                  </td>
                                </tr>
                                <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                  <tr>
                                  <td align="center" style="color:#48545d;font-size:14px;line-height:24px;">
                                      <li style="list-style: none">Entidad:</li>
                                      <li style="list-style: none"><b>{{$user->nombre_entidad}}</b></li>
                                  </td>
                                </tr>
                                <tr>
                                  <td height="20" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"> <span style="color:#48545d;font-size:14px;line-height:24px;">
                                  Si tienes dudas o quieres que resolvamos alguna inquietud <a href="mailto:soporte@bitu.com.co?subject=Alerta de montos" style="color:#420AB7">cont&aacute;ctanos
						                </a>o vis&iacute;tanos en nuestra
  							           <a href="https://www.bitu.com.co" style="color:#420AB7">pagina web</a>.</p>
                                </span>

                                  </td>
                                </tr>
                                <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                  <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                  <tr>
                                  <td align="left">
                                    <p style="color:#48545d;font-size:14px;line-height:18px;">¡Gracias!</p>
                                    <p style="color:#48545d;font-size:14px;line-height:18px;">Equipo Bitu.</p>
                                  </td>
                                </tr>
                                <tr>
                                  <td height="10" &nbsp;=""></td>
                                </tr>
                                <tr>
                                  <td align="center"></td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td height="60"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Main CONTENT end here -->
                    <!-- PROMO column start here -->
                    <!-- PROMO column end here -->
                    <!-- FOOTER start here -->
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                        <tr>
                          <td height="10">&nbsp;</td>
                        </tr>
                            <tr>
								        <td align="center" style="vertical-align:top;padding:0px;margin:0px;line-height:16px;padding-top:20px">
								            <table class="social" style="border:0px;border-collapse:collapse;border-spacing:0;width:auto">
								    <tr>
								        <td class="text-right" style="padding:0px;margin:0px;text-align:right;line-height:16px;padding-left:0px;padding-right:0px;vertical-align:middle;width:50px">
								            <a href="https://facebook.com/bitucol/" target="_blank" style="color:#6F36FF;display:inline-block">
								                <img alt="Bitu en Facebook" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/facebook-logo.png"
                          style="width:20px;vertical-align:middle;margin:0 6px">
                                            </a>
                                        </td>
                                        <td class="text-center" style="padding:0px;margin:0px;text-align:center;line-height:16px;padding-left:0px;padding-right:0px;vertical-align:middle;width:50px">
                                            <a href="https://instagram.com/bitucol" target="_blank" style="color:#6F36FF;display:inline-block">
                                                <img alt="Bitu en Instagram" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/instagram-logo.png"
                          style="width:20px;vertical-align:middle;margin:0 6px">
                                            </a>
                                        </td>
                                        <td class="text-left" style="padding:0px;margin:0px;text-align:left;line-height:16px;padding-left:0px;padding-right:0px;vertical-align:middle;width:50px"><a href="https://linkedin.com/company/bitucol" target="_blank" style="color:#6F36FF;display:inline-block">
                                            <img alt="Bitu en Linkedin" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/linkedin-logo.png"
                          style="width:20px;vertical-align:middle;margin:0 6px">
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                           <tr>
                          <td height="10">&nbsp;</td>
                        </tr>
                        <tr>
                          <td valign="top" align="center"> <span style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#9EB0C9; font-size:10px;">&copy;
                            <a href="https://www.bitu.com.co/" target="_blank" style="color:#9EB0C9 !important; text-decoration:none;">Bitu S.A.S.</a> 2020. Todos los derechos reservados.
                          </span>

                          </td>
                        </tr>
                        <tr>
                          <td height="50">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- FOOTER end here -->
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>

</html>



</body>

</html>
