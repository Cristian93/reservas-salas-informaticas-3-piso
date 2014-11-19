package controlador;

import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;

import modelo.Usuario;


public class HomeControlador {

	public EntityManagerFactory emf;
	public EntityManager em;
	
	 public HomeControlador() {
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
	}
		
		
		
	
	public List<Usuario> buscarUsuario (String usuario, String contrasena){
		
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.correoelectronico LIKE :usuario AND x.contrasena LIKE :contrasena");
		 query.setParameter("usuario", usuario).setParameter("contrasena", contrasena);
		 List <Usuario>  lista =query.getResultList();
		 return lista;
	 }
	
	
	
	
}
