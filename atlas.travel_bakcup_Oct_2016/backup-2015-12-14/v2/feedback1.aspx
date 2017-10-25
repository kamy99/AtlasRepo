<%@ page language="VB" autoeventwireup="false" inherits="feedback1, App_Web_71zaqkqz" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ayushitravel.com, Great Air Fare Deals To India From USA</title>
<link href="css.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #002763}
-->
</style>
<script type ="text/javascript" >
    function validateme() {
        if (document.getElementById("name").value == '') {
            alert("Name can't be blank");
            document.getElementById('name').focus();
            return false;
        }
               
             
        if (document.getElementById("txtemail").value == '') {
            alert("Email can't be blank");
            document.getElementById('txtemail').focus();
            return false;
        }
        if (document.getElementById('txtemail').value != '') {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

            if (!document.getElementById('txtemail').value.match(re)) {
                alert('Your email address is not in a valid format.\n Some valid formats are:\nsomeone@somewhere.com\nsome_one@some.where.net')
                document.getElementById('txtemail').focus();
                return false;
            }
        }
    }
</script>
</head>
<body>



<div id="middlenew">
 
  <form id="f1" runat="server">
     
      <table width="778" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="778" align="left" valign="top"><table width="778" cols=" " border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="244" align="left" valign="top" bgcolor="">&nbsp;</td>
                <td width="716" valign="top" bgcolor=""><table width="778" height="384" border="0" cellpadding="0" cellspacing="0" bgcolor="">
                    <tr>
                      <td height="384" align="center" valign="top" background="images/aboutus1.jpg" bgcolor=""><table width="628" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="16" bgcolor="">&nbsp;</td>
                          <td width="608"><table width="400" border="0" cellspacing="0" cellpadding="0">
                              <tr bgcolor="">
                                <td width="3%">&nbsp;</td>
                                <td width="92%" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td><table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600"><table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="">
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="text4">&nbsp;</td>
                                                  <td colspan="2" align="left" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="text4">&nbsp;</td>
                                                  <td colspan="2" align="left" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="text4">&nbsp;</td>
                                                  <td colspan="2" align="left" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td width="4%">&nbsp;</td>
                                                  <td width="23%" align="left" class="tooltext">Name:<span style="color:Red ;">*</span> </td>
                                                  <td colspan="2" align="left" class="text15"><span class="style25">
                                                    <label> </label>
                                                    </span>
                                                      <label>
                                                      <input name="name" type="text" size="20" id="name"  runat="server" />
                                                      </label>
                                                      <div align="left"></div></td>
                                                </tr>
                                                
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext">Company Name:</td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style25">
                                                      <input name="txtcompany" type="text" size="20" id="txtcompany"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">Address:</span></td>
                                                  <td colspan="2" class="text15"><span class="style25">
                                                    <label> </label>
                                                    </span>
                                                      <div align="left"><span class="style25">
                                                        <textarea name="txtAddress" cols="20" id="txtAddress"   runat="server"></textarea>
                                                    </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">City:</span></td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style1">
                                                      <input name="txtCity" type="text" size="20" id="txtCity"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">State:</span></td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style25">
                                                      <input name="txtstate" type="text" size="20" id="txtstate"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">Phone:</span></td>
                                                  <td colspan="2" align="left" class="text15"><span class="style25">
                                                    <input name="txtPhone" type="text" size="20" id="txtPhone"  runat="server" />
                                                  </span></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">Mobile:</span></td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style25">
                                                      <input name="txtMobile" type="text" size="20" id="txtMobile"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><span class="style37">Fax:</span></td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style25">
                                                      <input name="txtFax" type="text" size="20" id="txtFax"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td align="left" class="tooltext"><div align="left"><span class="style37">Email:<span 
                                                            style="color:Red ;">*</span></span></div></td>
                                                  <td colspan="2" class="text15"><div align="left"><span class="style1">
                                                      <input name="txtemail" type="text" size="20" id="txtemail"  runat="server" />
                                                  </span></div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext"><div align="left"><span class="style37">Query:</span></div></td>
                                                  <td colspan="2" class="text15"><div align="left">
                                                      <textarea name="textarea" cols="25" id="textarea"   runat="server"></textarea>
                                                  </div></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext"><div align="left"><span class="style37">Comments:</span></div></td>
                                                  <td class="text15"><textarea name="txtQuery" cols="25" rows="3" id="txtQuery" runat="server"></textarea></td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td width="37%" align="left" class="text15"><label>
                                                    <asp:Button ID="btn" runat="server" Text="Submit" OnClientClick="return validateme();" />                      
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td height="23" class="text15">&nbsp;</td>
                                                  <td align="center" class="text15">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td class="tooltext">&nbsp;</td>
                                                  <td class="text15">&nbsp;</td>
                                                </tr>
                                                
                                                
                                            </table></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                  </table>
                                    <map name="MapMap" id="MapMap">
                                      <area shape="rect" coords="63,0,87,23" href="contactus1.html" target="_parent" alt="Contact us" />
                                      <area shape="rect" coords="32,0,56,23" href="feedback.html" target="_parent" alt="Feedback" />
                                      <area shape="rect" coords="0,0,27,24" href="index.html" target="_parent" alt="Home" />
                                    </map>
                                </td>
                                <td width="5%">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="4">&nbsp;</td>
                        </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table>

</form></div>



</div>
</body>
</html>
