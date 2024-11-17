<%@ page language="java" import="java.util.*" pageEncoding="GB18030"%>
<%-- JSP Commets--%>
<%
	response.setContentType("text/javascript;charset=utf-8");

	response.setHeader("Cache-Control", "no-cache");

	String username = request.getParameter("username");
	String email = request.getParameter("email");
	
	String str = "username is "+ username + " and email is " + email;

	out.print(str);
   
	out.close();

%>
