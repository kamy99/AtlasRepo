<% if lcase(request.QueryString("section")) = "css" then %>
<!--#include file="./css/softvoyage.css" -->
<!--#include file="./css/agency.css" -->
<% elseif lcase(request.QueryString("section")) = "header" then %>
<!--#include file="header.htm" -->
<% elseif lcase(request.QueryString("section")) = "footer" then %>
<!--#include file="footer.htm" -->
<% end if  %>