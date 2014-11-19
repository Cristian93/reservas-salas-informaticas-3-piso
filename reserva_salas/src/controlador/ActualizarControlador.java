package controlador;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.faces.context.FacesContext;
import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import javax.persistence.Query;

 


import modelo.Perfil;
import modelo.Programa;
import modelo.Software;
import modelo.Usuario;

public class ActualizarControlador {
	public EntityManagerFactory emf;
	public EntityManager em;
	
	
	public ActualizarControlador (){
		
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
	}
	
	public List<Usuario> buscarUsuario (int idusuario){
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario", idusuario);
		 List <Usuario>  lista =query.getResultList();
		 return lista;
	 }
	 


	public List<Programa> ListaPrograma (){
		    Query query1 = em.createQuery("SELECT x FROM Programa x WHERE x.idprograma IN (SELECT r.programa.idprograma FROM Usuario r  WHERE r.idusuario = :idusuario)");
		    query1.setParameter("idusuario", (int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
			List <Programa>  lista =query1.getResultList();
	      
		
			Query query2 = em.createQuery("SELECT x FROM Programa x WHERE x.idprograma NOT IN (SELECT r.programa.idprograma FROM Usuario r  WHERE r.idusuario = :idusuario)");
			query2.setParameter("idusuario", (int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
			List <Programa> lista2 =query2.getResultList();
			
			List <Programa> listafinal = new ArrayList<Programa>();
			listafinal.addAll(lista);
			listafinal.addAll(lista2);
			return  listafinal;
 
	 } 
	
	public List<Perfil> ListaPerfil (){
	    Query query1 = em.createQuery("SELECT x FROM Perfil x WHERE x.idperfil IN (SELECT r.perfil.idperfil FROM Usuario r  WHERE r.idusuario = :idusuario)");
	    query1.setParameter("idusuario", (int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
		List <Perfil>  lista =query1.getResultList();
       
		Query query2 = em.createQuery("SELECT x FROM Perfil x WHERE x.idperfil NOT IN (SELECT r.perfil.idperfil FROM Usuario r  WHERE r.idusuario = :idusuario)");
		query2.setParameter("idusuario", (int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
		List <Perfil> lista2 =query2.getResultList();
		
		List <Perfil> listafinal = new ArrayList<Perfil>();
		listafinal.addAll(lista);
		listafinal.addAll(lista2);
		return  listafinal;

 } 
	
	public boolean verificarcontrasenaactual (String contrasena ){
		
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario",(int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario"));
		 List <Usuario>  lista =query.getResultList();
		if (lista.get(0).getContrasena().equals(contrasena))
			return true;
		else
			return false;
		
	}
	public boolean verificarcontrasenasiguales (String contrasena1,String contrasena2 ){
		
		 
		if (contrasena1.equals(contrasena2))
			return true;
		else
			return false;
		
	}
	public void actualizar (String correo , String nombre, String apellido, String contrasena1,int programa,int perfil  ){
		
		try {
			
			EntityTransaction et = em.getTransaction();	    
			
			Usuario us = em.find(Usuario.class,(int)FacesContext.getCurrentInstance().getExternalContext().getSessionMap().get("idusuario") ); 
			et.begin(); 
			
			us.setCorreoelectronico(correo);
			us.setNombre(nombre);
			us.setApellido(apellido);
			us.setContrasena(contrasena1);
			us.setPrograma(em.find(Programa.class, programa));
			us.setPerfil(em.find(Perfil.class, perfil));
			
			 em.persist( us ); 
			 et.commit(); }
			 finally{
			 em.close();
			 emf.close();}
		
	}
	public List<Usuario> verificarCorreo(String correoelectronico, int idusuario){
		 Query query = em.createQuery("SELECT x FROM Usuario  x WHERE x.correoelectronico LIKE :correoelectronico AND  x.idusuario NOT LIKE :idusuario");
		 query.setParameter("correoelectronico",correoelectronico).setParameter("idusuario", idusuario);
		 List <Usuario>  lista =query.getResultList();
		 return lista;
	} 
}
