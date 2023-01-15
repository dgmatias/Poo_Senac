package livraria;

public class LivroDigital extends Livro{
    
    public void definirDesconto() {
        
        this.preco = this.preco - (this.preco * 0.05);
     
    }
    
}
