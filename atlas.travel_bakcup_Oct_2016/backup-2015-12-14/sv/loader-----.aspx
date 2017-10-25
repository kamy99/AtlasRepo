<% if lcase(request.QueryString("section")) = "css" then %>
<!--#include file="./css/softvoyage.css" -->
<% elseif lcase(request.QueryString("section")) = "header" then %>
<!--#include file="kamyasd.html" -->
<% elseif lcase(request.QueryString("section")) = "footer" then %>
<!--#include file="footer.htm" -->
<% end if  %>