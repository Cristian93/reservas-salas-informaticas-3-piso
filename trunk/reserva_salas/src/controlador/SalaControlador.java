package controlador;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;
import javax.persistence.TemporalType;
import modelo.Sala;
import modelo.Reserva;

public class SalaControlador {
	public final EntityManagerFactory emf;
	public final EntityManager em;
public SalaControlador(){
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		    
		em = emf.createEntityManager();	
	
	}
	
 
	public Boolean e1 (){
		Reserva r=new Reserva();
		
				try{	
			int  numerocomputadores = 16;
			SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
			Date fechareserva = format.parse("2014-08-11");
			Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
			query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
			List <Sala>  lista =query.getResultList();	
			for (int j=0;j<lista.size();j++){
	    		if(lista.get(j).getIdsala()==1)
	    			return false;
	    		}
	    	
	   
		 
			}catch(Exception e){
				
				
			}
	 
			return  true;
	 } 
	
	public Boolean e2 (){
		
		try{	
	int  numerocomputadores = 16;
	SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
	Date fechareserva = format.parse("2014-08-11");
	Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
	query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
	List <Sala>  lista =query.getResultList();	
	for (int j=0;j<lista.size();j++){
		if(lista.get(j).getIdsala()==2)
			return false;
		}
	
	
 
	}catch(Exception e){
		
		
	}

	return  true;
}
public Boolean e3 (){
		
		try{	
	int  numerocomputadores = 16;
	SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
	Date fechareserva = format.parse("2014-08-11");
	Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
	query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
	List <Sala>  lista =query.getResultList();	
	for (int j=0;j<lista.size();j++){
		if(lista.get(j).getIdsala()==3)
			return false;
		}
	
	
 
	}catch(Exception e){
		
		
	}

	return  true;
}

public Boolean e4 (){
	
	try{	
int  numerocomputadores = 16;
SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
Date fechareserva = format.parse("2014-08-11");
Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
List <Sala>  lista =query.getResultList();	
for (int j=0;j<lista.size();j++){
	if(lista.get(j).getIdsala()==4)
		return false;
	}



}catch(Exception e){
	
	
}

return  true;
}


public Boolean e5 (){
	
	try{	
int  numerocomputadores = 16;
SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
Date fechareserva = format.parse("2014-08-11");
Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
List <Sala>  lista =query.getResultList();	
for (int j=0;j<lista.size();j++){
	if(lista.get(j).getIdsala()==5)
		return false;
	}



}catch(Exception e){
	
	
}

return  true;
}

public Boolean e6 (){
	
	try{	
int  numerocomputadores = 16;
SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
Date fechareserva = format.parse("2014-08-11");
Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
List <Sala>  lista =query.getResultList();	
for (int j=0;j<lista.size();j++){
	if(lista.get(j).getIdsala()==6)
		return false;
	}



}catch(Exception e){
	
	
}

return  true;
}


public Boolean e7 (){
	
	try{	
int  numerocomputadores = 16;
SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
Date fechareserva = format.parse("2014-08-11");
Query query = em.createQuery("  SELECT x FROM Sala x WHERE x.numerocomputadores >= :numerocomputadores AND x.idsala   NOT IN (SELECT r.sala.idsala FROM Reserva r  WHERE r.fechareserva = :fechareserva) ");
query.setParameter("numerocomputadores", numerocomputadores).setParameter("fechareserva", fechareserva,TemporalType.DATE);
List <Sala>  lista =query.getResultList();	
for (int j=0;j<lista.size();j++){
	if(lista.get(j).getIdsala()==7)
		return false;
	}



}catch(Exception e){
	
	
}

return  true;
}



}
