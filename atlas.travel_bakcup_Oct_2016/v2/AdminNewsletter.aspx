<%@ page language="VB" autoeventwireup="false" inherits="AdminNewsletter, App_Web_71zaqkqz" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title>NewsLetter</title>
    <style type="text/css">
body{margin:0px; font-family:Tahoma, Arial; font-size:11px; color:#666666;}
.textbox{border:1px #CCCCCC solid;}
.divclass{text-align:center; margin-top:15px;}
.divlogout{text-align:right; padding-right:30px; margin-top:15px; text-decoration:none;font-family:Tahoma, Arial; font-size:11px; color:#666666;}
        </style>
</head>
<body>
    <form id="form1" runat="server">
    <div class="divlogout" ><asp:LinkButton ID="BTNLOGOUT" runat="server" >LogOut</asp:LinkButton></div>
    <div align="left" ><asp:LinkButton ID="btnupdate" runat ="server" Text ="Update Hot Deals" Font-Bold ="true" Font-Size="12px" ></asp:LinkButton> </div>
    <div  align="center"  >
        <asp:GridView ID="grvhotdeals" runat="server" AutoGenerateColumns="False" 
            BackColor="White" BorderColor="#CC9966" BorderStyle="None" BorderWidth="1px" 
            CellPadding="4">
            <RowStyle BackColor="White" ForeColor="#330099" />
            <Columns>
                <asp:TemplateField HeaderText="Email">
                    <EditItemTemplate>
                        <asp:TextBox ID="txtemail" runat="server" Text='<%# Bind("email") %>'></asp:TextBox>
                    </EditItemTemplate>
                    <ItemTemplate>
                        <asp:Label ID="lblemail" runat="server" Text='<%# Bind("email") %>'></asp:Label>
                    </ItemTemplate>
                </asp:TemplateField>
                <asp:TemplateField HeaderText="Name">
                    <EditItemTemplate>
                        <asp:TextBox ID="txtname" runat="server" Text='<%# Bind("name") %>'></asp:TextBox>
                    </EditItemTemplate>
                    <ItemTemplate>
                        <asp:Label ID="lblname" runat="server" Text='<%# Bind("name") %>'></asp:Label>
                    </ItemTemplate>
                </asp:TemplateField>
                <asp:TemplateField ShowHeader="False">
                    <EditItemTemplate>
                        <asp:LinkButton ID="lnkupdate" runat="server" CausesValidation="True" 
                            CommandName="Update" Text="Update" CommandArgument ='<%# Bind("id") %>' 
                            onclick="lnkupdate_Click"></asp:LinkButton>
                        &nbsp;<asp:LinkButton ID="lnkcancel" runat="server" CausesValidation="False" 
                            CommandName="Cancel" Text="Cancel"></asp:LinkButton>
                    </EditItemTemplate>
                    <ItemTemplate>
                        <asp:LinkButton ID="lnkedit" runat="server" CausesValidation="False" 
                            CommandName="Edit" Text="Edit" CommandArgument ='<%# Bind("id") %>'></asp:LinkButton>
                    </ItemTemplate>
                </asp:TemplateField>
                <asp:TemplateField ShowHeader="False">
                    <ItemTemplate>
                        <asp:LinkButton ID="lnkdelete" runat="server" CausesValidation="False" 
                            CommandName="Delete" Text="Delete" CommandArgument ='<%# Bind("id") %>' 
                            onclick="lnkdelete_Click"></asp:LinkButton>
                    </ItemTemplate>
                </asp:TemplateField>
            </Columns>
            <FooterStyle BackColor="#FFFFCC" ForeColor="#330099" />
            <PagerStyle BackColor="#FFFFCC" ForeColor="#330099" HorizontalAlign="Center" />
            <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="#663399" />
            <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="#FFFFCC" />
        </asp:GridView>
    </div>
    </form>
</body>
</html>

