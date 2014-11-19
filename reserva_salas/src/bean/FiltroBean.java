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

import controlador.FiltroControlador;;
;

@ManagedBean( value ="ReservaBean")
@SessionScoped

public class FiltroBean implements Serializable{
	 private String nombremateria;
	 private String grupo;
	 private Date fecha;
	 private String hora;
	 private int numero_estudiantes;
	public String getNombremateria() {
		return nombremateria;
	}
	public void setNombremateria(String nombremateria) {
		this.nombremateria = nombremateria;
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
	public String getHora() {
		return hora;
	}
	public void setHora(String hora) {
		this.hora = hora;
	}
	public int getNumero_estudiantes() {
		return numero_estudiantes;
	}
	public void setNumero_estudiantes(int numero_estudiantes) {
		this.numero_estudiantes = numero_estudiantes;
	}
	 
	 public String filtrar(){
		 System.out.println(numero_estudiantes);
		 return String.valueOf(numero_estudiantes);
	 }
	 
	 
	 
}
