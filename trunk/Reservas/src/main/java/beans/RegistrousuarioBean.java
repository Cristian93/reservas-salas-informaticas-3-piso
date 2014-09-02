

package beans;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import java.io.Serializable;

@ManagedBean(name="RegistrarusuarioBean")
@SessionScoped
public class RegistrousuarioBean implements Serializable {
    
    private String nombre;
    private String apellido;
    private String correo1;
    private String correo2;
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
    public String getCorreo2() {
        return correo2;
    }

    /**
     * @param correo2 the correo2 to set
     */
    public void setCorreo2(String correo2) {
        this.correo2 = correo2;
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
       
    
    
    
}
