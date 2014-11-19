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
import modelo.Usuario;

public class RegistroControlador {
	public EntityManagerFactory emf;
	public EntityManager em;
	
	
	public RegistroControlador (){
		
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
	}
	public List<Programa> ListaPrograma (){
	    Query query1 = em.createQuery("SELECT x FROM Programa x");
	    List <Programa>  lista =query1.getResultList();
		return  lista;

 } 

public List<Perfil> ListaPerfil (){
	   Query query1 = em.createQuery("SELECT x FROM Perfil x");
	    List <Perfil>  lista =query1.getResultList();
 	    return  lista;
} 






public void agregarusuario (String correo , String nombre, String apellido, String contrasena1,String programa,String perfil){
		try {
			
		EntityTransaction et = em.getTransaction();
	
	    et.begin(); 
		Usuario us = new Usuario (); 
		us.setCorreoelectronico(correo);
		us.setNombre(nombre);
		us.setApellido(apellido);
		us.setContrasena(contrasena1);
		us.setFecharegistrousuario(new Date());
		us.setEstadousuario(true);
		us.setPrograma(em.find(Programa.class, buscarPrograma (Integer.parseInt(programa))));
		us.setPerfil(em.find(Perfil.class, buscarPerfil (Integer.parseInt(perfil))));
		
		 em.persist(us); 
		 et.commit(); }
		 finally{
		 em.close();
		 emf.close();}
}
public int buscarPrograma (int idprograma){
	 Query query = em.createQuery("SELECT x FROM Programa  x WHERE x.idprograma LIKE :idprograma");
	 query.setParameter("idprograma", idprograma);
	 List <Programa>  lista =query.getResultList();
	 return lista.get(0).getIdprograma();
} 
public int buscarPerfil(int idperfil){
	 Query query = em.createQuery("SELECT x FROM Perfil  x WHERE x.idperfil LIKE :idperfil");
	 query.setParameter("idperfil", idperfil);
	 List <Perfil>  lista =query.getResultList();
	 return lista.get(0).getIdperfil();
} 

public List<Usuario> verificarCorreo(String correoelectronico){
	 Query query = em.createQuery("SELECT x FROM Usuario  x WHERE x.correoelectronico LIKE :correoelectronico");
	 query.setParameter("correoelectronico",correoelectronico);
	 List <Usuario>  lista =query.getResultList();
	 return lista;
} 


}
