<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div style="font-family:Arial;width:400px;margin: 50px auto;">
        <h2>SUMA</h2>
        <asp:Label ID="Label1" runat="server" Text="Ingrese a: "></asp:Label>
        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
        <br />
        <br />
        <asp:Label ID="Label2" runat="server" Text="Ingrese b: "></asp:Label>
        <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
        <br />
        <br />
        <asp:Button ID="Button1" runat="server" Text="Sumar" OnClick="Suma" />
        <br />
        <br />
        <asp:Label ID="Label4" runat="server" Text="Resultado: "></asp:Label>
        <asp:Label ID="Label3" runat="server" Font-Bold="true"></asp:Label>
  
    
    </div>
    </form>
</body>
</html>
