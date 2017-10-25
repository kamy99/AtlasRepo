<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="Default.aspx.vb" Inherits="AtlasTravelAds._Default" %>
<!DOCTYPE html> 
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]--> 
<!--[if IE 7 ]>		 <html lang="en" class="ie7"> <![endif]--> 
<!--[if IE 8 ]>		 <html lang="en" class="ie8"> <![endif]--> 
<!--[if IE 9 ]>		 <html lang="en" class="ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]--> 
<head runat="server"> 
<title>Specials</title>
<meta charset="utf-8" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="screen">
	body {
background: #fff;
		font: 12px/1.5 arial, helvetica, sans-serif;
		margin: 0 auto;
		padding: 0;
	}

	.features-b .list {
		margin-bottom: 18px; }
		.features-b .list em {
			color: #cc6600;
			font-style: normal; 
			font-size:14px;}
		.features-b .list .details-1, .features-b .list .details-2 {
			vertical-align: top; }
		.features-b .list .details-1 {
			float: left;
			width: 70%; }
		.features-b .list .details-2 {
			float: right;
			text-align: right;
			width: 30%; }
			.features-b .list .details-2 em {
				font-weight: bold; }
		.features-b .list .item a {
			background: white url(/img/item.png) repeat-x 0 0;
			border-bottom: 1px solid #dbdbdb;
			color: #000000;
			display: block;
			overflow: auto;
			padding: 5px;
			text-decoration: none; }
		.features-b .list .item a:hover, .features-b .list .item a:focus {
			background-position: 0 -36px;
			cursor: pointer;
			text-decoration: none; }
		.features-b .list .item p {
			margin: 0; }
</style>
</head>

<body>
    <form id="form1" runat="server">
    <div>
<asp:Repeater id="myRepeaterUL" runat="server">
  <HeaderTemplate>
<div class="features-b">

	<div class="inner">
		<div class="list">

  </HeaderTemplate>
  <ItemTemplate>
		
				<div class="item">
					<a href="<%# DataBinder.Eval(Container.DataItem, "URL") %>" target="_top">
					<div class="details-1">
						<p style="color: #233D66;"><strong><%#DataBinder.Eval(Container.DataItem, "Desc")%></strong> <%#DataBinder.Eval(Container.DataItem, "Dates")%> </p>
						<p style="color: #233D66;"><%#DataBinder.Eval(Container.DataItem, "Rating")%></p>
					</div>
					<div class="details-2">
						<p><em><%#DataBinder.Eval(Container.DataItem, "BasePrice")%></em></p>
						<p><small>+$<%#DataBinder.Eval(Container.DataItem, "Tax")%> tax</small></p>						
					</div>
					</a>
				</div>
  </ItemTemplate>
  <FooterTemplate>
		</div>
	</div>
</div>

  </FooterTemplate>
</asp:Repeater>


    </div>
    </form>
</body>
</html>
