package bean;

import java.io.Serializable;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.annotation.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.model.SelectItem;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;
import javax.persistence.TemporalType;

import controlador.ReservaControlador;
import controlador.SalaControlador;
import modelo.Sala;
@ManagedBean( value ="SalasBean")
@SessionScoped

public class SalasBean implements Serializable {

	 private static final long serialVersionUID = 1L;
	 private boolean e1;
	 private boolean e2;
	 private boolean e3;
	 private boolean e4;
	 private boolean e5;
	 private boolean e6;
	 private boolean e7;
	 public boolean gete1() {
			
			SalaControlador s=new SalaControlador();
			e1=s.e1();
			return e1;
			
		}
	 public boolean gete2() {
			
			SalaControlador s=new SalaControlador();
			e2=s.e2();
			return e2;
			
		}
		
	 public boolean gete3() {
			
			SalaControlador s=new SalaControlador();
			e3=s.e3();
			return e3;
			
		}
	 public boolean gete4() {
			
			SalaControlador s=new SalaControlador();
			e4=s.e4();
			return e4;
			
		}
	 public boolean gete5() {
			
			SalaControlador s=new SalaControlador();
			e5=s.e5();
			return e5;
			
		}
	 public boolean gete6() {
			
			SalaControlador s=new SalaControlador();
			e6=s.e6();
			return e6;
			
		}
	 public boolean gete7() {
			
			SalaControlador s=new SalaControlador();
			e7=s.e7();
			return e7;
			
		}
		
		
		
		

	 


}
