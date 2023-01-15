package livraria;

public class Livraria {
      
    public static void main(String[] args) {
        
      LivroDigital livro1 = new LivroDigital();
      livro1.autor.setNome("Diego");
      livro1.setTitulo("Joao pé de feijão");
      livro1.setIsbn(111);
      livro1.setAno(2005);
      livro1.setPreco(15);
      livro1.definirDesconto();
      livro1.mostrarLivro();
    }
    
}
