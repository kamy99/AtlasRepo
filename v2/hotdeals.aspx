<%@ page language="VB" autoeventwireup="false" inherits="hotdeals, App_Web_71zaqkqz" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>Update HotDeals Here</title>
    <style type="text/css">
body{margin:0px; font-family:Tahoma, Arial; font-size:11px; color:#666666;}
.textbox{border:1px #CCCCCC solid;}
.divclass{text-align:center; margin-top:15px;}
.divlogout{text-align:right; padding-right:30px; margin-top:15px; text-decoration:none;font-family:Tahoma, Arial; font-size:11px; color:#666666;}
        .style1
        {
            width: 64%;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div align="left"><asp:LinkButton ID="btnNews" runat="server" >NewsLetter</asp:LinkButton> </div> 
    <div class="divlogout" ><asp:LinkButton ID="BTNLOGOUT" runat="server" >LogOut</asp:LinkButton></div>
    <div class="divclass" align="center" >
    <table width="100%" border="0" cellspacing="2" cellpadding="2" align="center" >
  <tr>
    <td valign="top" bgcolor="#F0F0FF"><table border="0" cellspacing="2" 
            cellpadding="2" style="width: 51%" align="center" >
      
      
	  
            
      
      <tr>
        <td>From</td>
        <td class="style1">
            To</td>
        <td class="style1">
            Price</td>
      </tr>
      
      
	  
            
      
      <tr>
        <td>
        <asp:TextBox ID="txtfrom1" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto1" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice1" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
	  <tr>
        <td width="27%">
        <asp:TextBox ID="txtfrom2" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto2" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice2" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
	  <tr>
        <td>
        <asp:TextBox ID="txtfrom3" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto3" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice3" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
    <tr>
        <td>
        <asp:TextBox ID="txtfrom4" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto4" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice4" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
      <tr>
        <td>
        <asp:TextBox ID="txtfrom5" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto5" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice5" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
      <tr>
        <td>
        <asp:TextBox ID="txtfrom6" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto6" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice6" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
      <tr>
        <td>
        <asp:TextBox ID="txtfrom7" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto7" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice7" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
      <tr>
        <td>
        <asp:TextBox ID="txtfrom8" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtto8" runat="server" Width="120px" CssClass="textbox" >
                </asp:TextBox>
                                </td>
        <td class="style1">
        <asp:TextBox ID="txtprice8" runat="server" Width="120px" CssClass="textbox" 
                ></asp:TextBox>
                                </td>
      </tr>
      </table></td>
  </tr>
</table>
    </div>
    <div class="divclass">                <asp:Button ID="btnSubmit" runat="server" 
            BackColor="#E0E0E0" Font-Bold="True" 
            Font-Names="Tahoma" Font-Size="13px" ForeColor="white" Text="Update Deals" 
            Width="115px" BorderStyle="Solid" />
                    <br />
        <asp:Label ID="Label1" runat="server"></asp:Label>
                    </div>
    </form>
</body>
</html>

