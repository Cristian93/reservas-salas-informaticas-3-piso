package bean;

import javax.annotation.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.FacesContext;

import modelo.Usuario;

import java.util.List;

import controlador.HomeControlador;

@ManagedBean( value ="HomeBean")
@SessionScoped
public class HomeBean {
	 private static final long serialVersionUID = 1L;
	 
	 private String usuario  ; 
	 private String contrasena  ;
	 
	public String inicio (){
		//System.out.println(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
		if (!usuario.isEmpty()  &&  !contrasena.isEmpty()) {
			HomeControlador hc =  new HomeControlador() ;
			List <Usuario> lista = hc.buscarUsuario(usuario, contrasena);
	
			if (lista.size() == 1) { 
			FacesContext context = FacesContext.getCurrentInstance();
			context.getExternalContext().getSessionMap().put("idusuario", lista.get(0).getIdusuario());
			//System.out.println(FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
			return ("perfil.xhtml?faces-redirect=true");
			}else {
				
				return ("home.xhtml?faces-redirect=true");
			}
		    
		
		}else {
		
			return ("home.xhtml?faces-redirect=true");
			}
		
		
		
	} 
	
	public String getContrasena() {
		return contrasena;
	}
	public void setContrasena(String contrasena) {
		this.contrasena = contrasena;
	}
	public String getUsuario() {
		return usuario;
	}
	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}

}
