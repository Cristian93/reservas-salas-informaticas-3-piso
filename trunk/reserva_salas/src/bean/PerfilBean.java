package bean;

import java.io.IOException;
 
import java.util.ArrayList;
import java.util.List;

import javax.annotation.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;

 




import controlador.ActualizarControlador;
import controlador.PerfilControlador;
 
import modelo.Reserva;
import modelo.Usuario;
 
@ManagedBean( value ="PerfilBean")
@SessionScoped
public class PerfilBean {

private String correo;
private String nombre;
private String programa; 
private String perfil; 
public PerfilBean () {
	
	// FacesContext.getCurrentInstance().getExternalContext().getSession(true);
	 //System.out.println(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));	
		
	if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") != null){
		
		}
}

public void cargar () throws IOException {
	 FacesContext.getCurrentInstance().getExternalContext().getSession(true);
	if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") == null) {
		FacesContext.getCurrentInstance().getExternalContext().redirect("home.xhtml");  
		//	 return;
		}
			
			// FacesContext.getCurrentInstance().getExternalContext().getSession(true);
			 
			
				 
		
	 
}

public String cerrar (){
	FacesContext.getCurrentInstance().getExternalContext().invalidateSession();
	return ("home.xhtml?faces-redirect=true");	
}

public ArrayList<Reserva> getListareserva() {
    return PerfilControlador.listareservas(  (int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") );
}

public String getNombre() {
	PerfilControlador pc = new PerfilControlador();
	nombre = pc.buscarnombre(  (int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario")  );
	return nombre;
}

public void setNombre(String nombre) {
	this.nombre = nombre;
}

public String getCorreo() {
	PerfilControlador pc = new PerfilControlador();
	correo = pc.buscarcorreo(  (int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario")  )  +"@ucatolica.edu.co";
	return correo;
}

public void setCorreo(String correo) {
	this.correo = correo;
}

public String getPrograma() {
	PerfilControlador pc = new PerfilControlador();
	programa = "Programa de "+pc.buscarprograma(  (int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario")  )  ;
	return programa;
}

public void setPrograma(String programa) {
	this.programa = programa;
}

public String getPerfil() {
	PerfilControlador pc = new PerfilControlador();
	perfil = pc.buscarperfil(  (int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario")  )  ;
	return perfil;
}

public void setPerfil(String perfil) {
	this.perfil = perfil;
}


 




}
