
package beans;

import java.io.Serializable;
import java.util.Date;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

@ManagedBean(name="PerfilBean")
@SessionScoped
public class PerfilBean implements Serializable {
    private String nombre;
    private String apellido;
    private String correo1;
    private String programa_academico;
    
    private int sala;
    private Date fecha;
    private Date hora;
    private String software;
    private String clase;
    private String grupo;
    private int n_estudiantes;
    private String recursos;
    
 public String getApellido() {
        return apellido;
    }

  public String getCorreo1() {
        return correo1;
    }   
    
   public String getPrograma_academico() {
        return programa_academico;
    }
   
   public int getSala() {
        return sala;
    } 
 public Date getFecha() {
        return fecha;
    } 
 public Date getHora() {
        return hora;
    } 
 public String getNombre() {
        return nombre;
    } 
 public String getSoftware() {
        return software;
    } 
 public String getClase() {
        return clase;
    } 
 public String getGrupo() {
        return grupo;
    } 
 public int getN_estudiantes() {
        return n_estudiantes;
    } 
 public String getRecursos() {
        return recursos;
    } 
}
