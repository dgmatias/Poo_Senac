interface Forma {
    public String getTipo();
    public double getArea();
}

class Quadrado implements Forma {
    private double largura;
    private double altura;

    public Quadrado(double largura, double altura) {
        this.largura = largura;
        this.altura = altura;
    }

    public String getTipo() {
        return "quadrado";
    }
    public double getArea() {
        return this.largura * this.altura;
    }
}

class Circulo implements Forma {

    private Double raio;

    public Circulo(double raio) {
        this.raio = raio;
    }

    public String getTipo() {
        return "circulo";
    }

    public double getArea() {
        return Math.PI * (this.raio * this.raio);
    }
} 

public class Main {
  public static void main(String[] args) {
      Quadrado quadrado = new Quadrado(5,5);
    Circulo circulo = new Circulo(7);
    System.out.println("Tipo: " + quadrado.getTipo());
    System.out.println("Área: " + quadrado.getArea());
    System.out.println("Tipo: " + circulo.getTipo());
    System.out.println("Área: " + circulo.getArea());
  }
}
