using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;
namespace Track_My_Health_Dr
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
           string[] arr1 = Class1.test();
            foreach(string i in arr1)
            {
                textBox1.Text += i + "\r\n"; 
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            MySqlConnection x = Class1.connection();
            try
            {
                //x.Open();
                string query = "INSERT INTO PATIENT(FIRST_NAME, LAST_NAME, EMAIL, P_PASSWORD) VALUES('cc3','bb3','31@yahoo.com','123');";

                MySqlCommand cmd = new MySqlCommand(query, x);
                cmd.ExecuteNonQuery();
                x.Close();
            }
            catch(Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
        }
    }
}
