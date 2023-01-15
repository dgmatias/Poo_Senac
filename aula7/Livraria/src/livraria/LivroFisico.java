package livraria;

public class LivroFisico extends Livro{
 
     public void definirDesconto() {
        
        this.preco = this.preco - (this.preco * 0.10);
     
    }
    
}
