using System;
using System.Diagnostics;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        int[] vector = { 2, 3, 5, 1, 5, 23 };
        int suma = 0;
        float promedio;

        string s = "";

        for (int i = 0; i < vector.Length; i++)
        {
            suma = suma + vector[i];
            s += vector[i].ToString() + ",";
        }
            
        promedio = suma / vector.Length;



        Response.Write("Vector: " + s + "<br>");
        Response.Write("Promedio: " + promedio.ToString());
  

    }
}


