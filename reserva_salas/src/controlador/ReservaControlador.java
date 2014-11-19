package controlador;



import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.EntityTransaction;
import javax.persistence.Persistence;
import javax.persistence.Query;

import modelo.Software;

import java.util.ArrayList;
import java.util.List;
public class ReservaControlador {
	
	public EntityManagerFactory emf;
	public EntityManager em;
	
	public ReservaControlador(){
		
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
	}
	
 
	public List<SelectItem> ListaSoftware (){
			
	    em.getTransaction().begin();
		Query query = em.createQuery("SELECT x FROM Software x WHERE x.estadosoftware = 1");
		List <Software>  lista =query.getResultList();
        List<SelectItem> list = new ArrayList<SelectItem>(); 
		for (int j=0;j<lista.size();j++){
		//System.out.println(lista.get(j).getIdsoftware());
	//	System.out.println( lista.get(j).getNombresoftware());
    	list.add ( new SelectItem (  (lista.get(j).getIdsoftware())    , (lista.get(j).getNombresoftware())  )  );	
		}
		return  list;
 
	 } 

}
