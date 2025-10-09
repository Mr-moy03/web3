using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Suma(object sender, EventArgs e)
    {
        int a,b;
        if (int.TryParse(TextBox1.Text, out a) && int.TryParse(TextBox2.Text, out b) && a > 0 && b > 0)
        {
            int resultado = a + b;

            Label3.Text = "La suma de " + a + " + "+ b + "es: " + resultado;

        }
        else
        {
            Label3.Text = "Ingrese un número entero positivo.";
        }
    }
}