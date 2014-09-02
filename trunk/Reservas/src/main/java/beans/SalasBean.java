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
    boolean e2=false;
    boolean e3=true;
    boolean e4=true;
    boolean e5=false;
    boolean e6=false;
    boolean e7=true;
    
    
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
  public boolean gete2() {
      
    /*  if(f.getNumero_estudiantes()>20)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e2;
  }
  public boolean gete3() {
      
    /*  if(f.getNumero_estudiantes()>20)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e3;
  }
  public boolean gete4() {
      
    /*  if(f.getNumero_estudiantes()>20)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e4;
  }
  public boolean gete5() {
      
    /*  if(f.getNumero_estudiantes()>20)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e5;
  }
  public boolean gete6() {
      
    /*  if(f.getNumero_estudiantes()>30)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e6;
  }
  public boolean gete7() {
      
    /*  if(f.getNumero_estudiantes()>40)
          e1=true;
      else
          e1=false;
		return e1;
            
            */
      return e7;
  }
            

}