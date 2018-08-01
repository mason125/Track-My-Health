using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace Track_My_Health_Dr
{
    abstract class Selection
    {
        //patient read and write methods
        abstract protected string[] patient_read(char choice, int pat_id);
        abstract protected void patient_write(char choice, int pat_id);

        public static MySqlConnection connection()
        {
            string connetionString = "server=localhost;" +
                "database=healthtrack;" +
                "uid=root;" +
                "pwd='';";

            MySqlConnection conn = new MySqlConnection(connetionString);
            conn.Open();//open connection
            return conn;
        }


    }
}
