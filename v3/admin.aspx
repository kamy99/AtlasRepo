<%@ page language="VB" autoeventwireup="false" inherits="admin, App_Web_71zaqkqz" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Admin Login</title>
    <style type="text/css">
    body{margin:0px; font-family:Tahoma, Arial; font-size:11px; color:#5f5f5f;}
    .textbox{border:1px #CCCCCC solid;}
    .divalign{ margin:0px auto; width:360px; border:1px #E0E0E0 solid; margin-top:150px;}
        .style1
        {
            width: 96px;
        }
        h1{width:360px; text-align:center;}
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div class="divalign">
    <h1>Admin Login</h1>
    <table width="350" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td class="style1">User Name </td>
    <td width="230">
        <asp:TextBox ID="txt_UserName" runat="server" Width="250px" CssClass="textbox"></asp:TextBox>
                    </td>
  </tr>
  <tr>
    <td class="style1">Password</td>
    <td>
        <asp:TextBox ID="txt_Password" runat="server" Width="250px" CssClass="textbox" 
            TextMode="Password"></asp:TextBox>
                    </td>
  </tr>
  <tr>
    <td class="style1">&nbsp;</td>
    <td>
        <asp:Button ID="btnLogin" runat="server" BackColor="#E0E0E0" Font-Bold="True" 
            Font-Names="Tahoma" Font-Size="13px" ForeColor="white" Text="Login" 
            Width="90px" BorderStyle="Solid" />
                    </td>
  </tr>
</table>
    </div>
    </form>
</body>
</html>
