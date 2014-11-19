package controlador;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;

import modelo.Programa;
import modelo.Reserva;
import modelo.Sala;
import modelo.Usuario;

public class PerfilControlador {
	
	//public EntityManagerFactory emf;
	//public EntityManager em;
	
	
	public PerfilControlador (){
		
		
	//	emf = Persistence.createEntityManagerFactory("reserva_salas");
		//em = emf.createEntityManager();
	}
	
	public static ArrayList<Reserva> listareservas(int idusuario) {
		 EntityManagerFactory emf;
		 EntityManager em;
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
           
        	 Query query = em.createQuery("SELECT x FROM Reserva x WHERE x.usuario.idusuario =:idusuario");
    		  query.setParameter("idusuario", idusuario);
    		 List <Reserva>  lista =query.getResultList();
    		 
    			
    		 Reserva [] reserva  = new Reserva [lista.size()]; 
    	     ArrayList<Reserva> al = new ArrayList<Reserva>();
    		 for (int i = 0; i <lista.size(); i++) {
				 reserva [i ] = new Reserva();
				 
				 reserva[i].setSala(  em.find(Sala.class, lista.get(i).getSala().getIdsala()   ))      ;    
    			
    			
			    reserva[i].setFechareserva(lista.get(i).getFechareserva());
		//	    System.out.println(lista.get(i).getFechareserva());
    			 reserva[i].setHorareserva(lista.get(i).getHorareserva());
    			 reserva[i].setAsignatura(lista.get(i).getAsignatura());
    			 reserva[i].setGrupo(lista.get(i).getGrupo());
    			 reserva[i].setNumeroestudiantes(lista.get(i).getNumeroestudiantes());
    			 al.add(reserva[i]);
    			 
			}
    		 return al;
       
            
    }
	
	
	public String buscarnombre(int idusuario){
		 EntityManagerFactory emf;
		 EntityManager em;	
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario", idusuario);
			 List <Usuario>  lista =query.getResultList();
			 return lista.get(0).getNombre()+" "+lista.get(0).getApellido();
		 
	}

	public String buscarcorreo(int idusuario){
		 EntityManagerFactory emf;
		 EntityManager em;	
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario", idusuario);
			 List <Usuario>  lista =query.getResultList();
			 return lista.get(0).getCorreoelectronico();
		 
	}
	public String buscarprograma(int idusuario){
		 EntityManagerFactory emf;
		 EntityManager em;	
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario", idusuario);
			 List <Usuario>  lista =query.getResultList();
			 return lista.get(0).getPrograma().getNombreprograma();
		 
	}

	public String buscarperfil(int idusuario){
		 EntityManagerFactory emf;
		 EntityManager em;	
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		em = emf.createEntityManager();
		 Query query = em.createQuery("SELECT x FROM Usuario x WHERE x.idusuario LIKE :idusuario");
		 query.setParameter("idusuario", idusuario);
			 List <Usuario>  lista =query.getResultList();
			 return lista.get(0).getPerfil().getNombreperfil();
		 
	}
}
