
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
import modelo.Software;


public class FiltroControlador {
	public final EntityManagerFactory emf;
	public final EntityManager em;
public FiltroControlador(){
		
		emf = Persistence.createEntityManagerFactory("reserva_salas");
		    
		em = emf.createEntityManager();	
	
	}
	
 

}
