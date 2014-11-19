package bean;

import java.util.List;

import javax.annotation.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.event.ValueChangeEvent;
import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;

import modelo.Perfil;
import modelo.Programa;

import org.apache.bval.jsr303.xml.GetterType;

import controlador.RegistroControlador;

@ManagedBean( value ="RegistroBean")
@SessionScoped
public class RegistroBean {
	 private static final long serialVersionUID = 1L;
	private String nombre  = ""; 
	private String apellido ; 
	private String correo1 ;
	private String correo2;
	private String contrasena1 ;
	private String contrasena2 ;
	private String programa="";
	private String perfil="";
	
	
	public Programa[] listaprogramas;
	public Perfil[] listaperfil;
	 
	public void limpiar () {
		setPrograma("");
		setPerfil("");
		
		
	}
	
	
	public Programa[] getListaprograma() {
 
		RegistroControlador i = new RegistroControlador();
		 List <Programa>  lista  = i.ListaPrograma();
		 listaprogramas   = new Programa[lista.size()];
		for (int j=0;j<lista.size();j++){listaprogramas [j] = new Programa();
		listaprogramas[j].setNombreprograma(lista.get(j).getNombreprograma());
		listaprogramas[j].setIdprograma((lista.get(j).getIdprograma()));
		}
		
 		return listaprogramas;
 
	}
	public Perfil[] getListaperfil() {
		 
		RegistroControlador i = new RegistroControlador();
		 List <Perfil>  lista  = i.ListaPerfil();
		 listaperfil   = new Perfil[lista.size()];
		for (int j=0;j<lista.size();j++){listaperfil [j] = new Perfil();
		listaperfil[j].setNombreperfil(lista.get(j).getNombreperfil());
		listaperfil[j].setIdperfil((lista.get(j).getIdperfil()));
		}
		
 		return listaperfil;
 
	}
	
	public String agregar (){
		  
	
		  if (!getNombre().isEmpty()&& !getApellido().isEmpty() && !getCorreo1().isEmpty() && !getCorreo2().isEmpty() && !getContrasena1().isEmpty() && !getContrasena2().isEmpty() )
	
		  {
			  if (getContrasena1().equals(contrasena2)) {
				  
				  if (getCorreo1().equals(correo2)) {
					  
					  //CONSULTAR QUE EL CORREO NO ESTE 
					  RegistroControlador rc = new RegistroControlador();
					  if (rc.verificarCorreo(getCorreo1()).size() == 0) {
						
						  rc.agregarusuario(getCorreo1(), getNombre(), getApellido(), getContrasena1(), getPrograma(), getPerfil());
							 
						  setNombre("");
						  setApellido("");
						  setCorreo1("");
						  setCorreo2("");
						  setContrasena1("");
						  setContrasena2("");
						  
						  
						  return ("home.xhtml?faces-redirect=true");
						  
					  }else {
						  
						  
						  setContrasena1("");
						  setContrasena2("");
						  setCorreo2("");
						  return ("Form_registro_usuario.xhtml?faces-redirect=true");
					  }
					 
					  
				  }else {
					  
					  setContrasena1("");
					  setContrasena2("");
					  setCorreo2("");
					  return ("Form_registro_usuario.xhtml?faces-redirect=true");
				  }
				  
				  
			  }else {
				  
				  setContrasena1("");
				  setContrasena2("");
				  setCorreo2("");
				  return ("Form_registro_usuario.xhtml?faces-redirect=true");
			  }
			  
			  
			  
		  }	  else {
			  
			  setContrasena1("");
			  setContrasena2("");
			  setCorreo2("");
			  return ("Form_registro_usuario.xhtml?faces-redirect=true");
			  }
			  
			  //	
	  }
	
	public String reset (){
	      setNombre("");
		  setApellido("");
		  setCorreo1("");
		  setCorreo2("");
		  setContrasena1("");
		  setContrasena2("");
		  
		  return ("home.xhtml?faces-redirect=true");
	}
	  


  
	public String getNombre() {
		 
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getApellido() {
		return apellido;
	}
	public void setApellido(String apellido) {
		this.apellido = apellido;
	}
	public String getCorreo1() {
		return correo1;
	}
	public void setCorreo1(String correo1) {
		this.correo1 = correo1;
	}
	public String getCorreo2() {
		return correo2;
	}
	public void setCorreo2(String correo2) {
		this.correo2 = correo2;
	}
	public String getContrasena1() {
		return contrasena1;
	}
	public void setContrasena1(String contrasena1) {
		this.contrasena1 = contrasena1;
	}
	public String getContrasena2() {
		return contrasena2;
	}
	public void setContrasena2(String contrasena2) {
		this.contrasena2 = contrasena2;
	}
	public String getPrograma() {
		return programa;
	}
	public void setPrograma(String programa) {
		this.programa = programa;
	}
	public String getPerfil() {
		return perfil;
	}
	public void setPerfil(String perfil) {
		this.perfil = perfil;
	}

	
	
	
}
