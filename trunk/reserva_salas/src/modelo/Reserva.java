package modelo;

import java.io.Serializable;
import javax.persistence.*;
import java.sql.Time;
import java.util.Date;
import java.util.List;


/**
 * The persistent class for the reserva database table.
 * 
 */
@Entity
@NamedQuery(name="Reserva.findAll", query="SELECT r FROM Reserva r")
public class Reserva implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int idreserva;

	private String asignatura;

	private boolean estadoreserva;

	@Temporal(TemporalType.TIMESTAMP)
	private Date fecharegistroreserva;

	@Temporal(TemporalType.DATE)
	private Date fechareserva;

	private String grupo;

	private Time horareserva;

	private int numeroestudiantes;

	//bi-directional many-to-many association to Recurso
	@ManyToMany
	@JoinTable(
		name="reserva_has_recurso"
		, joinColumns={
			@JoinColumn(name="reserva_idreserva")
			}
		, inverseJoinColumns={
			@JoinColumn(name="recurso_idrecurso")
			}
		)
	private List<Recurso> recursos;

	//bi-directional many-to-one association to Sala
	@ManyToOne
	private Sala sala;

	//bi-directional many-to-one association to Usuario
	@ManyToOne
	private Usuario usuario;

	//bi-directional many-to-many association to Software
	@ManyToMany(mappedBy="reservas")
	private List<Software> softwares;

	public Reserva() {
	}

	public int getIdreserva() {
		return this.idreserva;
	}

	public void setIdreserva(int idreserva) {
		this.idreserva = idreserva;
	}

	public String getAsignatura() {
		return this.asignatura;
	}

	public void setAsignatura(String asignatura) {
		this.asignatura = asignatura;
	}

	public boolean getEstadoreserva() {
		return this.estadoreserva;
	}

	public void setEstadoreserva(boolean estadoreserva) {
		this.estadoreserva = estadoreserva;
	}

	public Date getFecharegistroreserva() {
		return this.fecharegistroreserva;
	}

	public void setFecharegistroreserva(Date fecharegistroreserva) {
		this.fecharegistroreserva = fecharegistroreserva;
	}

	public Date getFechareserva() {
		return this.fechareserva;
	}

	public void setFechareserva(Date fechareserva) {
		this.fechareserva = fechareserva;
	}

	public String getGrupo() {
		return this.grupo;
	}

	public void setGrupo(String grupo) {
		this.grupo = grupo;
	}

	public Time getHorareserva() {
		return this.horareserva;
	}

	public void setHorareserva(Time horareserva) {
		this.horareserva = horareserva;
	}

	public int getNumeroestudiantes() {
		return this.numeroestudiantes;
	}

	public void setNumeroestudiantes(int numeroestudiantes) {
		this.numeroestudiantes = numeroestudiantes;
	}

	public List<Recurso> getRecursos() {
		return this.recursos;
	}

	public void setRecursos(List<Recurso> recursos) {
		this.recursos = recursos;
	}

	public Sala getSala() {
		return this.sala;
	}

	public void setSala(Sala sala) {
		this.sala = sala;
	}

	public Usuario getUsuario() {
		return this.usuario;
	}

	public void setUsuario(Usuario usuario) {
		this.usuario = usuario;
	}

	public List<Software> getSoftwares() {
		return this.softwares;
	}

	public void setSoftwares(List<Software> softwares) {
		this.softwares = softwares;
	}

}