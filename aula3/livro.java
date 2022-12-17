public abstract class Livro{
    private String nome;
    private String descricao;
    private double valor;
    private String isbn;
    private Autor autor;
    
    public Livro(Autor autor){
        this.autor=autor;
        this.isbn="000-00-00000-00-0";
    }
    
    public boolean aplicaDesconto(double procentagem){
        return false;
    }
    
}

private class LivroFisico extends Livro{

    public LivroFisico(Autor autor) {
        super(autor);
    }
    
    public double getTaxaImpressao(){
        return this.getValor() * 0.05;
    }
    
}

public class Main{
  public static void main(String[] args){
    System.out.println("Hello World");
  }
}