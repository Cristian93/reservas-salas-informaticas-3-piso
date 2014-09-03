/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package beans;

import java.awt.event.ActionEvent;
import java.io.Serializable;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;

/**
 *
 * @author Sebas
 */

@ManagedBean(name="ActualizarBean")
@SessionScoped
public class ActualizarBean implements Serializable {
    private String nombre;
    private String apellido;
    private String correo1;
    private String contraseña;
    private String contraseñan;
    private String programa_academico;
    
    
    /**
     * @return the nombre
     */
    public String getNombre() {
        return nombre;
    }

    /**
     * @param nombre the nombre to set
     */
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    /**
     * @return the apellido
     */
    public String getApellido() {
        return apellido;
    }

    /**
     * @param apellido the apellido to set
     */
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    /**
     * @return the correo1
     */
    public String getCorreo1() {
        return correo1;
    }

    /**
     * @param correo1 the correo1 to set
     */
    public void setCorreo1(String correo1) {
        this.correo1 = correo1;
    }

    /**
     * @return the correo2
     */
    public String getContraseña() {
        return contraseña;
    }

    public void setContraseña(String Contraseña) {
        this.contraseña = Contraseña;
    }
    
    public String getContraseñan() {
        return contraseñan;
    }

    public void setContraseñan(String Contraseñan) {
        this.contraseñan = Contraseñan;
    }

    /**
     * @return the programa_academico
     */
    public String getPrograma_academico() {
        return programa_academico;
    }
    /**
     * @param programa_academico the programa_academico to set
     */
    public void setPrograma_academico(String programa_academico) {
        this.programa_academico = programa_academico;
    }  
    
     public void buttonAction(ActionEvent actionEvent) {
        addMessage("Página actualizada");
    }
     
    public void addMessage(String summary) {
        FacesMessage message = new FacesMessage(FacesMessage.SEVERITY_INFO, summary,  null);
        FacesContext.getCurrentInstance().addMessage(null, message);
    }
}
