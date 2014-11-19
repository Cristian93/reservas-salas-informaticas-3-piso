package modelo;

import java.io.Serializable;
import javax.persistence.*;
import java.util.List;


/**
 * The persistent class for the software database table.
 * 
 */
@Entity
@NamedQuery(name="Software.findAll", query="SELECT s FROM Software s")
public class Software implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int idsoftware;

	private boolean estadosoftware;

	private String nombresoftware;

	//bi-directional many-to-many association to Reserva
	@ManyToMany
	@JoinTable(
		name="software_has_reserva"
		, joinColumns={
			@JoinColumn(name="software_idsoftware")
			}
		, inverseJoinColumns={
			@JoinColumn(name="reserva_idreserva")
			}
		)
	private List<Reserva> reservas;

	//bi-directional many-to-many association to Sala
	@ManyToMany
	@JoinTable(
		name="software_has_sala"
		, joinColumns={
			@JoinColumn(name="software_idsoftware")
			}
		, inverseJoinColumns={
			@JoinColumn(name="sala_idsala")
			}
		)
	private List<Sala> salas;

	public Software() {
	}

	public int getIdsoftware() {
		return this.idsoftware;
	}

	public void setIdsoftware(int idsoftware) {
		this.idsoftware = idsoftware;
	}

	public boolean getEstadosoftware() {
		return this.estadosoftware;
	}

	public void setEstadosoftware(boolean estadosoftware) {
		this.estadosoftware = estadosoftware;
	}

	public String getNombresoftware() {
		return this.nombresoftware;
	}

	public void setNombresoftware(String nombresoftware) {
		this.nombresoftware = nombresoftware;
	}

	public List<Reserva> getReservas() {
		return this.reservas;
	}

	public void setReservas(List<Reserva> reservas) {
		this.reservas = reservas;
	}

	public List<Sala> getSalas() {
		return this.salas;
	}

	public void setSalas(List<Sala> salas) {
		this.salas = salas;
	}

}