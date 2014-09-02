/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package beans;
import beans.FiltroBean;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import java.io.Serializable;

@ManagedBean(name="SalasBean")
@SessionScoped
public class SalasBean implements Serializable {
    boolean e1=true;
    boolean e2;
    boolean e3;
    boolean e4;
    boolean e5;
    boolean e6;
    boolean e7;
    
    
    FiltroBean f=new FiltroBean();
  public boolean gete1() {
      
    /*  if(f.getNumero_estudiantes()>20)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e1;
  }
            

	public void sete1(boolean e1) {
		this.e1 = e1;
	}


    
    
}