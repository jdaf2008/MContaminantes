/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modulostandalone;

import java.util.Random;

/**
 *
 * @author sergio_colmenares
 */
public class Sensor {

    private final String nombre;
    
    public Sensor(String nombre)
    {
        this.nombre = nombre;    
    }
    
    public boolean ProbarConexion()
    {
        // para iniciar se prueba con un metodo que simula la respuesta del sensor al random
        Random rand = new Random();
        
        if (rand.nextFloat() > 0.8)
        {
            return (false);
        }
        else
        {
            return true;
        }
    }  
    
    public void EncederSensor()    
    {
        // se envia señal de control al sensor    
    }
    
    public void ApagarSensor()
    {
        // se emvia señal de control al sensor.    
    }

    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }
}
