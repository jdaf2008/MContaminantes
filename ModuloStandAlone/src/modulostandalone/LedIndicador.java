/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modulostandalone;
import java.awt.Color;
import javax.swing.JLabel;

/**
 *
 * @author sergio_colmenares
 */
public class LedIndicador extends JLabel{
    
    public LedIndicador()
    {
        this.setText("•");
    }   
    
    public void EncenderLed(boolean encender)
    {
        if (encender) {
            this.setForeground(Color.GREEN);
        } else {
            this.setForeground(Color.RED);
        }
    } 
}
