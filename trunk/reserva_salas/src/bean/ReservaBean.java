package bean;

import java.io.Serializable;
import java.util.*;

import javax.faces.application.FacesMessage;
//import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;
import javax.faces.event.ValueChangeEvent;
import javax.faces.model.SelectItem;
  

import javax.annotation.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.event.ValueChangeEvent;

import controlador.ReservaControlador;

@ManagedBean( value ="ReservaBean")
@SessionScoped

public class ReservaBean implements Serializable{


	 private static final long serialVersionUID = 1L;
	 
	    private Date fecha;
		private Date hora;
		private String software="d";
		
		private int numero_estudiantes;
		
		private String asignatura;
		
		private String grupo;
		
		
		 public List<SelectItem> getListasoftware() {
				
				ReservaControlador i = new ReservaControlador();
				return i.ListaSoftware();
			}
			
		 
		  public void softwareChanged(ValueChangeEvent e){
		//assign new value to localeCode
				software = e.getNewValue().toString();
				
				}
	
	    
		public String getAsignatura() {
			return asignatura;
		}

		public void setAsignatura(String asignatura) {
			this.asignatura = asignatura;
		}

		public String getGrupo() {
			return grupo;
		}

		public void setGrupo(String grupo) {
			this.grupo = grupo;
		}
		
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
