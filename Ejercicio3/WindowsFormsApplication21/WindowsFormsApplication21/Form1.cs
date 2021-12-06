using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace WindowsFormsApplication21
{
    public partial class Form1 : Form
    {
        int cR, cG, cB, cR2, cG2, cB2, cR3, cG3, cB3, t1r, t1g, t1b, t2r, t2g, t2b, t3r, t3g, t3b;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.ShowDialog();
            Bitmap bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            c = bmp.GetPixel(10, 10);
            textBox1.Text = c.R.ToString();
            //textBox2.Text = c.G.ToString();
            textBox3.Text = c.B.ToString();
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            /*Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            c = bmp.GetPixel(e.X, e.Y);
            textBox1.Text = c.R.ToString();
            textBox2.Text = c.G.ToString();
            textBox3.Text = c.B.ToString();
            cR = c.R;
            cG = c.G;
            cB = c.B;*/
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Color c = new Color();
            int x, y, mR = 0, mG = 0, mB = 0;
            x = e.X; y = e.Y;
            for (int i = x; i < x + 10; i++)
                for (int j = y; j < y + 10; j++)
                {
                    c = bmp.GetPixel(i, j);
                    mR = mR + c.R;
                    mG = mG + c.G;
                    mB = mB + c.B;
                }
            mR = mR / 100;
            mG = mG / 100;
            mB = mB / 100;
            cR = mR;
            cG = mG;
            cB = mB;
            textBox1.Text = cR.ToString();
            textBox2.Text = cG.ToString();
            textBox3.Text = cB.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, c);
                }
            pictureBox2.Image = cpoa;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, Color.FromArgb(c.R, 0, 0));
                }
            pictureBox2.Image = cpoa;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    cpoa.SetPixel(i, j, Color.FromArgb(0, c.G, 0));
                }
            pictureBox2.Image = cpoa;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    if (((cR - 10) < c.R) && (c.R < (cR + 10)) && ((cG - 10) < c.G) && (c.G < (cG + 10)) && ((cB - 10) < c.B) && (c.B < (cB + 10)))
                        cpoa.SetPixel(i, j, Color.Black);
                    else
                        cpoa.SetPixel(i, j, c);
                }
            pictureBox2.Image = cpoa;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            int meR, meG, meB;
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width - 10; i += 10)
                for (int j = 0; j < bmp.Height - 10; j += 10)
                {
                    meR = 0;
                    meG = 0;
                    meB = 0;

                    for (int k = i; k < i + 10; k++)
                        for (int l = j; l < j + 10; l++)
                        {
                            c = bmp.GetPixel(k, l);
                            meR = meR + c.R;
                            meG = meG + c.G;
                            meB = meB + c.B;
                        }
                    meR = meR / 100;
                    meG = meG / 100;
                    meB = meB / 100;

                    if (((cR - 10) < meR) && (meR < (cR + 10)) && ((cG - 10) < meG) && (meG < (cG + 10)) && ((cB - 10) < meB) && (meB < (cB + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.Black);
                            }
                    

                    else
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                c = bmp.GetPixel(k, l);
                                cpoa.SetPixel(k, l, c);
                            }
                }
            pictureBox2.Image = cpoa;
        }

        private void button8_Click(object sender, EventArgs e)
        {
            t1r = cR;
            t1g = cG;
            t1b = cB;
        }

        private void button9_Click(object sender, EventArgs e)
        {
            t2r = cR;
            t2g = cG;
            t2b = cB;
        }

        private void button10_Click(object sender, EventArgs e)
        {
            t3r = cR;
            t3g = cG;
            t3b = cB;
        }

        private void button11_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=LAPTOP-Q81M2BTO\\SQLEXPRESS;Initial Catalog=imagenes;Persist Security Info=True;User ID=user324;Password=324");
            con.Open();
            String com = "insert into textura(t1r, t1g, t1b, t2r, t2g, t2b, t3r, t3g, t3b) values('" + t1r + "','" + t1g + "','" + t1b + "','" + t2r + "','" + t2g + "','" + t2b + "','" + t3r + "','" + t3g + "','" + t3b + "');";
            SqlCommand cmd = new SqlCommand(com, con);
            int i = cmd.ExecuteNonQuery();
            if (i != 0)
            {
                MessageBox.Show("Datos guardados");
                cambiarColorv2();
            }
            else MessageBox.Show("Error");
        }

        public void cambiarColor()
        {
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            cR = t1r; cG = t1g; cB = t1b; cR2 = t2r; cG2 = t2g; cB2 = t2b; cR3 = t3r; cG3 = t3g; cB3 = t3b;
            textBox4.Text = "Llego aqui";
            for (int i = 1; i < bmp.Width; i++)
                for (int j = 1; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    if (((cR - 10) < c.R) && (c.R < (cR + 10)) && ((cG - 10) < c.G) && (c.G < (cG + 10)) && ((cB - 10) < c.B) && (c.B < (cB + 10)))
                        cpoa.SetPixel(i, j, Color.Yellow);
                    else if (((cR2 - 10) < c.R) && (c.R < (cR2 + 10)) && ((cG2 - 10) < c.G) && (c.G < (cG2 + 10)) && ((cB2 - 10) < c.B) && (c.B < (cB2 + 10)))
                        cpoa.SetPixel(i, j, Color.ForestGreen);
                    else if (((cR3 - 10) < c.R) && (c.R < (cR3 + 10)) && ((cG3 - 10) < c.G) && (c.G < (cG3 + 10)) && ((cB3 - 10) < c.B) && (c.B < (cB3 + 10)))
                        cpoa.SetPixel(i, j, Color.DeepSkyBlue);
                    else
                        cpoa.SetPixel(i, j, c);
                }
            textBox4.Text = "Al final";
            pictureBox2.Image = cpoa;
        }

        public void cambiarColorv2()
        {
            int meR, meG, meB;
            cR = t1r; cG = t1g; cB = t1b; cR2 = t2r; cG2 = t2g; cB2 = t2b; cR3 = t3r; cG3 = t3g; cB3 = t3b;
            Bitmap bmp = new Bitmap(pictureBox1.Image);
            Bitmap cpoa = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width - 10; i += 10)
                for (int j = 0; j < bmp.Height - 10; j += 10)
                {
                    meR = 0;
                    meG = 0;
                    meB = 0;

                    for (int k = i; k < i + 10; k++)
                        for (int l = j; l < j + 10; l++)
                        {
                            c = bmp.GetPixel(k, l);
                            meR = meR + c.R;
                            meG = meG + c.G;
                            meB = meB + c.B;
                        }
                    meR = meR / 100;
                    meG = meG / 100;
                    meB = meB / 100;

                    if (((cR - 10) < meR) && (meR < (cR + 10)) && ((cG - 10) < meG) && (meG < (cG + 10)) && ((cB - 10) < meB) && (meB < (cB + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.Black);
                            }

                    else if (((cR2 - 10) < meR) && (meR < (cR2 + 10)) && ((cG2 - 10) < meG) && (meG < (cG2 + 10)) && ((cB2 - 10) < meB) && (meB < (cB2 + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.ForestGreen);
                            }

                    else if (((cR3 - 10) < meR) && (meR < (cR3 + 10)) && ((cG3 - 10) < meG) && (meG < (cG3 + 10)) && ((cB3 - 10) < meB) && (meB < (cB3 + 10)))
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                cpoa.SetPixel(k, l, Color.Yellow);
                            }

                    else
                        for (int k = i; k < i + 10; k++)
                            for (int l = j; l < j + 10; l++)
                            {
                                c = bmp.GetPixel(k, l);
                                cpoa.SetPixel(k, l, c);
                            }
                }
            pictureBox2.Image = cpoa;
        }

    }
}
