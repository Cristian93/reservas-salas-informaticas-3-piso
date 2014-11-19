package modelo;

import java.io.Serializable;
import javax.persistence.*;
import java.util.List;


/**
 * The persistent class for the sala database table.
 * 
 */
@Entity
@NamedQuery(name="Sala.findAll", query="SELECT s FROM Sala s")
public class Sala implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int idsala;

	private boolean estadosala;

	private String nombresala;

	private int numerocomputadores;

	//bi-directional many-to-one association to Reserva
	@OneToMany(mappedBy="sala")
	private List<Reserva> reservas;

	//bi-directional many-to-many association to Software
	@ManyToMany(mappedBy="salas")
	private List<Software> softwares;

	public Sala() {
	}

	public int getIdsala() {
		return this.idsala;
	}

	public void setIdsala(int idsala) {
		this.idsala = idsala;
	}

	public boolean getEstadosala() {
		return this.estadosala;
	}

	public void setEstadosala(boolean estadosala) {
		this.estadosala = estadosala;
	}

	public String getNombresala() {
		return this.nombresala;
	}

	public void setNombresala(String nombresala) {
		this.nombresala = nombresala;
	}

	public int getNumerocomputadores() {
		return this.numerocomputadores;
	}

	public void setNumerocomputadores(int numerocomputadores) {
		this.numerocomputadores = numerocomputadores;
	}

	public List<Reserva> getReservas() {
		return this.reservas;
	}

	public void setReservas(List<Reserva> reservas) {
		this.reservas = reservas;
	}

	public Reserva addReserva(Reserva reserva) {
		getReservas().add(reserva);
		reserva.setSala(this);

		return reserva;
	}

	public Reserva removeReserva(Reserva reserva) {
		getReservas().remove(reserva);
		reserva.setSala(null);

		return reserva;
	}

	public List<Software> getSoftwares() {
		return this.softwares;
	}

	public void setSoftwares(List<Software> softwares) {
		this.softwares = softwares;
	}

}