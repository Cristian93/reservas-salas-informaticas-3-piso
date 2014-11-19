package bean;

import java.io.IOException;
import java.util.List;

import javax.annotation.ManagedBean;
import javax.annotation.PostConstruct;
import javax.faces.bean.SessionScoped;
import javax.faces.context.ExternalContext;
import javax.faces.context.FacesContext;
import javax.faces.event.ValueChangeEvent;
import javax.faces.model.SelectItem;

import modelo.Perfil;
import modelo.Programa;
import modelo.Usuario;
import controlador.ActualizarControlador;
import controlador.RegistroControlador;
import controlador.ReservaControlador;

@ManagedBean( value ="ActualizarBean")
@SessionScoped
public class ActualizarBean {
	private static final long serialVersionUID = 1L;
	
	private String nombre ; 
	private String apellido ; 
	private String correo ;
	private String contrasena;
	private String contrasena1 ;
	private String contrasena2 ;
	private String programa="";
	private String perfil="";
	public Programa[] listaprogramas;
	public Perfil[] listaperfil;
	
	
/*	@PostConstruct
	void initialiseSession() {
		 System.out.println(" POST");	
		 FacesContext.getCurrentInstance().getExternalContext().getSession(true);
		if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") == null)
			try {
			System.out.println("koko");
			
			 FacesContext.getCurrentInstance().getExternalContext().redirect("home.xhtml");  
			} catch (IOException ex) {

	
			}
			
	}*/
	
	public ActualizarBean () {
		//if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap()== null){System.out.println("y");}
		
		// FacesContext.getCurrentInstance().getExternalContext().getSession(true);
		// System.out.println(" hola" +FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));	
	//	if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") == null)
		//	try {
					
		//	 FacesContext.getCurrentInstance().getExternalContext().redirect("home.xhtml");  
		//	} catch (IOException ex) {

	
			//}else {
		if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") != null) {
		ActualizarControlador ac  = new ActualizarControlador() ; 
		List <Usuario> lista = ac.buscarUsuario((int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
		setNombre(lista.get(0).getNombre());
		setApellido(lista.get(0).getApellido());
		setCorreo(lista.get(0).getCorreoelectronico());
		setContrasena("");
		setContrasena1("");
		setContrasena2("");
		 
			}	
		
	}
	
	public void ac () throws IOException {
			 FacesContext.getCurrentInstance().getExternalContext().getSession(true);
		 	if(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") != null) {
			System.out.println(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));	
				ActualizarControlador ac  = new ActualizarControlador() ;
				List <Usuario> lista = ac.buscarUsuario((int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
				setNombre(lista.get(0).getNombre());
				setApellido(lista.get(0).getApellido());
				setCorreo(lista.get(0).getCorreoelectronico());
				setContrasena("");
				setContrasena1("");
				setContrasena2("");
				setPerfil("");
				setPrograma("");
			}else {
				
				// FacesContext.getCurrentInstance().getExternalContext().getSession(true);
				 
			     FacesContext.getCurrentInstance().getExternalContext().redirect("home.xhtml");  
				//	 return;
					 
			}
		
	
	}
	
	
	 public Programa[] getListaprograma() {
			
			ActualizarControlador i = new ActualizarControlador();
			 List <Programa>  lista  = i.ListaPrograma();
			 listaprogramas   = new Programa[lista.size()];
			for (int j=0;j<lista.size();j++){listaprogramas [j] = new Programa();
			listaprogramas[j].setNombreprograma(lista.get(j).getNombreprograma());
			listaprogramas[j].setIdprograma((lista.get(j).getIdprograma()));
			}
			
	 		return listaprogramas;
		}
		
	 

	  public Perfil[] getListaperfil() {
			
		  ActualizarControlador i = new ActualizarControlador();
			 List <Perfil>  lista  = i.ListaPerfil();
			 listaperfil   = new Perfil[lista.size()];
			for (int j=0;j<lista.size();j++){listaperfil [j] = new Perfil();
			listaperfil[j].setNombreperfil(lista.get(j).getNombreperfil());
			listaperfil[j].setIdperfil((lista.get(j).getIdperfil()));
			}
			
	 		return listaperfil;
		}
		
	 
	
	  
	public String actualizar ()  {
		
		if (!getNombre().isEmpty() && !getApellido().isEmpty()  &&!getCorreo().isEmpty() && !getContrasena().isEmpty()  && !getContrasena1().isEmpty()  && !getContrasena2().isEmpty() ){	
			ActualizarControlador ac = new ActualizarControlador ();
			if (ac.verificarcontrasenaactual(getContrasena())==true){
				
				if (ac.verificarcontrasenasiguales(getContrasena1(), getContrasena2())==true){				
					  if (ac.verificarCorreo(getCorreo(),(int) FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario")).size() == 0) {
						  ac.actualizar(getCorreo(), getNombre(),getApellido(),getContrasena1(), Integer.parseInt(getPrograma()), Integer.parseInt(getPerfil()));
						  return ("perfil.xhtml?faces-redirect=true");
					  }else{return ("Actualizar.xhtml?faces-redirect=true");}
				}else return ("Actualizar.xhtml?faces-redirect=true");
			}else {
				return ("Actualizar.xhtml?faces-redirect=true");
			}			
		}else {
			return ("Actualizar.xhtml?faces-redirect=true");
		}	
	}
	
	public String cerrar (){
	
		FacesContext.getCurrentInstance().getExternalContext().invalidateSession();
	
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
	public String getCorreo() {
		return correo;
	}
	public void setCorreo(String correo) {
		this.correo = correo;
	}
	public String getPrograma() {
		return programa;
	}
	public void setPrograma(String programa) {
		this.programa = programa;
	}
	public String getContrasena() {
		return contrasena;
	}
	public void setContrasena(String contrasena) {
		this.contrasena = contrasena;
	}

	public String getPerfil() {
		return perfil;
	}

	public void setPerfil(String perfil) {
		this.perfil = perfil;
	}



}
