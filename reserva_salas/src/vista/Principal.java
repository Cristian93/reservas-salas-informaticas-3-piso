package vista;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import javax.persistence.Query;





import modelo.Perfil;
import modelo.Programa;
import modelo.Reserva;
import modelo.Software;
import modelo.Usuario;


public class Principal {
	
	
	public List<Reserva> listareservas(int idusuario) {
       
		EntityManagerFactory emf;
		  EntityManager em;

		  
		  
			emf = Persistence.createEntityManagerFactory("reserva_salas");

			
			em = emf.createEntityManager();
			
        	 Query query = em.createQuery("SELECT x FROM Reserva x WHERE x.usuario.idusuario =:idusuario");
    		 query.setParameter("idusuario", idusuario);
    		 List <Reserva>  lista =query.getResultList();
        	System.out.println(lista);
    		 return lista;
        
    }

public void agregarusuario (String correo , String nombre, String apellido, String contrasena1,String programa,String perfil){
		
	EntityManagerFactory emf;
	  EntityManager em;

	  
	  
		emf = Persistence.createEntityManagerFactory("reserva_salas");

		
		em = emf.createEntityManager();	
	try {
			 
		EntityTransaction et = em.getTransaction();
	
	    et.begin(); 
		Usuario us = new Usuario (); 
		us.setCorreoelectronico(correo);
		us.setNombre(nombre);
		us.setApellido(apellido);
		us.setContrasena(contrasena1);
		us.setFecharegistrousuario(new Date());
		System.out.println("4");
		us.setEstadousuario(true);
		us.setPrograma(em.find(Programa.class, buscarPrograma (programa)));
		us.setPerfil(em.find(Perfil.class, buscarPerfil (perfil)));
		
		 em.persist(us); 
		 et.commit(); }
		 finally{
		 em.close();
		 emf.close();}
}
public int buscarPrograma (String nombreprograma){
	 EntityManagerFactory emf;
	  EntityManager em;

	  
	  
		emf = Persistence.createEntityManagerFactory("reserva_salas");

		
		em = emf.createEntityManager();	
	 Query query = em.createQuery("SELECT x FROM Programa  x WHERE x.nombreprograma LIKE :nombreprograma");
	 query.setParameter("nombreprograma", nombreprograma);
	 List <Programa>  lista =query.getResultList();
	 return lista.get(0).getIdprograma();
} 
public int buscarPerfil(String nombreperfil){
	 EntityManagerFactory emf;
	  EntityManager em;

	  
	  
		emf = Persistence.createEntityManagerFactory("reserva_salas");

		
		em = emf.createEntityManager();	
	 Query query = em.createQuery("SELECT x FROM Perfil  x WHERE x.nombreperfil LIKE :nombreperfil");
	 query.setParameter("nombreperfil", nombreperfil);
	 List <Perfil>  lista =query.getResultList();
	 return lista.get(0).getIdperfil();
} 

	public static void main(String[] args) {
		
		
	 /*	  EntityManagerFactory emf;
		  EntityManager em;
	
		  
		  
			emf = Persistence.createEntityManagerFactory("reserva_salas");

			
			em = emf.createEntityManager();	
		
	*/		
			
			
		/*	Query query = em.createQuery("SELECT x FROM Software x");
			 
		
	     		 List <Software>  lista =query.getResultList();
			   List<SelectItem> list = new ArrayList<SelectItem>();
			   
			  
				
				for (int j=0;j<lista.size();j++){
				System.out.println(lista.get(j).getIdsoftware());
				System.out.println( lista.get(j ).getNombresoftware());
		    	list.add ( new SelectItem (      (lista.get(j).getIdsoftware()), (lista.get(j).getNombresoftware())  )  );	
				}
			 */
		 /*    Query query1 = em.createQuery("SELECT x FROM Programa x WHERE x.idprograma IN (SELECT r.programa.idprograma FROM Usuario r  WHERE r.idusuario = :idusuario)");
		    query1.setParameter("idusuario", 2);
			List <Programa>  lista =query1.getResultList();
	        List<SelectItem> list = new ArrayList<SelectItem>(); 
			for (int j=0;j<lista.size();j++){
	    	list.add ( new SelectItem (  (lista.get(j).getIdprograma())    , (lista.get(j).getNombreprograma())  )  );}
		
			Query query2 = em.createQuery("SELECT x FROM Programa x WHERE x.idprograma NOT IN (SELECT r.programa.idprograma FROM Usuario r  WHERE r.idusuario = :idusuario)");
			query2.setParameter("idusuario", 2);
			List <Programa> lista2 =query2.getResultList();
			for (int j=0;j<lista2.size();j++){
		    list.add ( new SelectItem (  (lista2.get(j).getIdprograma())    , (lista2.get(j).getNombreprograma())  )  );}
	        em.close();
		*/
			
			Principal p =  new Principal() ;
		//	p.agregarusuario("dd", "ds", "dsds", "sas", "ingenieria de sistemas", "Profesor");
p.listareservas(3);
	}

}
