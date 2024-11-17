<%@ LANGUAGE= "VBScript"%>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>ASP Sample</title>
</head>

<body>
<h1>Query Results</h1>
<p>
You submitted the following name-value pairs:
<ul>
<% 
	For each Element In request.form 
		For i=1 to request.form(Element).count
			Response.write  "<li>" & Element & "=" & Request.Form(Element)(i) & "</li>"
		Next
	Next
%>
</ul>
</p>
</body>
</html>
