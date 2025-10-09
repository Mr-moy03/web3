<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Fibonacci</title>
</head>
<body>
    <form id="form1" runat="server">
        <div style="font-family:Arial; width:400px; margin:50px auto;">
            <h2>Serie de Fibonacci</h2>
            
            <asp:Label ID="lblN" runat="server" Text="Ingrese n: "></asp:Label>
            <asp:TextBox ID="txtN" runat="server"></asp:TextBox>
            <br /><br />
            
            <asp:Button ID="btnCalcular" runat="server" Text="Calcular" OnClick="btnCalcular_Click" />
            <br /><br />

            <asp:Label ID="lblResultado" runat="server" Font-Bold="true"></asp:Label>
            <br /><br />
            <asp:Label ID="lblSerie" runat="server"></asp:Label>
        </div>
    </form>
</body>
</html>
