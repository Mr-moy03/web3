using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void btnCalcular_Click(object sender, EventArgs e)
    {
        int n;
        if (int.TryParse(txtN.Text, out n) && n > 0)
        {
            // Calcular Fibonacci en la posición n
            int fibN = Fibonacci(n);

            // Mostrar el valor en la posición n
            lblResultado.Text = "El valor en la posición " + n + " es: " + fibN;

            // Mostrar la serie hasta n
            string serie = "";
            for (int i = 1; i <= n; i++)
            {
                serie += Fibonacci(i) + (i < n ? ", " : "");
            }
            lblSerie.Text = "Serie hasta " + n + ": " + serie;
        }
        else
        {
            lblResultado.Text = "Ingrese un número entero positivo.";
            lblSerie.Text = "";
        }
    }

    // Método recursivo para Fibonacci
    private int Fibonacci(int n)
    {
        if (n == 1 || n == 2) return 1;
        return Fibonacci(n - 1) + Fibonacci(n - 2);
    }
}
