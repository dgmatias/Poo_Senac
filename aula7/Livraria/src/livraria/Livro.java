
package livraria;

public abstract class Livro {
    
    private String titulo;
    private int isbn;
    private int ano;
    protected double preco;
    Autor autor = new Autor();
    
    
    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }
    
    public String getTitulo() {
        return titulo;
    }
    
    public void setIsbn(int isbn) {
        this.isbn = isbn;
    }
    
    public int getIsbn() {
        return isbn;
    }
    
    public void setAno(int ano) {
        this.ano = ano;
    }
    
    public int getAno() {
        return ano;
    }
    
    public void setPreco(double preco) {
        this.preco = preco;
    }
    
    public double getPreco() {
        return preco;
    }
    
    public void mostrarLivro() {
        System.out.println("Autor: " + autor.getNome() + " titulo: " + getTitulo() + " isbn: " + getIsbn() + " ano: " + getAno() + " preco: " + getPreco());
    }
    
}
