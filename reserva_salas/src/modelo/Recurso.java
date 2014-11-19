package modelo;

import java.io.Serializable;
import javax.persistence.*;
import java.util.List;


/**
 * The persistent class for the recurso database table.
 * 
 */
@Entity
@NamedQuery(name="Recurso.findAll", query="SELECT r FROM Recurso r")
public class Recurso implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int idrecurso;

	private boolean estadorecurso;

	private String nombrerecurso;

	//bi-directional many-to-many association to Reserva
	@ManyToMany(mappedBy="recursos")
	private List<Reserva> reservas;

	public Recurso() {
	}

	public int getIdrecurso() {
		return this.idrecurso;
	}

	public void setIdrecurso(int idrecurso) {
		this.idrecurso = idrecurso;
	}

	public boolean getEstadorecurso() {
		return this.estadorecurso;
	}

	public void setEstadorecurso(boolean estadorecurso) {
		this.estadorecurso = estadorecurso;
	}

	public String getNombrerecurso() {
		return this.nombrerecurso;
	}

	public void setNombrerecurso(String nombrerecurso) {
		this.nombrerecurso = nombrerecurso;
	}

	public List<Reserva> getReservas() {
		return this.reservas;
	}

	public void setReservas(List<Reserva> reservas) {
		this.reservas = reservas;
	}

}