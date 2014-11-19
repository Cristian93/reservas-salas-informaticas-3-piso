package modelo;

import java.io.Serializable;
import javax.persistence.*;
import java.util.List;


/**
 * The persistent class for the programa database table.
 * 
 */
@Entity
@NamedQuery(name="Programa.findAll", query="SELECT p FROM Programa p")
public class Programa implements Serializable {
	private static final long serialVersionUID = 1L;

	@Id
	private int idprograma;

	private boolean estadoprograma;

	private String nombreprograma;

	//bi-directional many-to-one association to Usuario
	@OneToMany(mappedBy="programa")
	private List<Usuario> usuarios;

	public Programa() {
	}

	public int getIdprograma() {
		return this.idprograma;
	}

	public void setIdprograma(int idprograma) {
		this.idprograma = idprograma;
	}

	public boolean getEstadoprograma() {
		return this.estadoprograma;
	}

	public void setEstadoprograma(boolean estadoprograma) {
		this.estadoprograma = estadoprograma;
	}

	public String getNombreprograma() {
		return this.nombreprograma;
	}

	public void setNombreprograma(String nombreprograma) {
		this.nombreprograma = nombreprograma;
	}

	public List<Usuario> getUsuarios() {
		return this.usuarios;
	}

	public void setUsuarios(List<Usuario> usuarios) {
		this.usuarios = usuarios;
	}

	public Usuario addUsuario(Usuario usuario) {
		getUsuarios().add(usuario);
		usuario.setPrograma(this);

		return usuario;
	}

	public Usuario removeUsuario(Usuario usuario) {
		getUsuarios().remove(usuario);
		usuario.setPrograma(null);

		return usuario;
	}

}