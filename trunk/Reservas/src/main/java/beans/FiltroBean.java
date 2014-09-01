package beans;



import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import java.io.Serializable;

import java.util.Date;



@ManagedBean(name="FiltroBean")
@SessionScoped

public class FiltroBean implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	private Date fecha;
	private Date hora;
	private String software;
	private int numero_estudiantes;
	
	
	
	public Date getFecha() {
		return fecha;
	}

	public void setFecha(Date fecha) {
		this.fecha = fecha;
	}

	public Date getHora() {
		return hora;
	}

	public void setHora(Date hora) {
		this.hora = hora;
	}

	public String getSoftware() {
		return software;
	}

	public void setSoftware(String software) {
		this.software = software;
	}

	public int getNumero_estudiantes() {
		return numero_estudiantes;
	}

	public void setNumero_estudiantes(int numero_estudiantes) {
		this.numero_estudiantes = numero_estudiantes;
	}


}
