public class ValoresPorDefecto {

    // Variables de instancia (se inicializan automáticamente)
    byte b;
    short s;
    int i;
    long l;
    float f;
    double d;
    char c;
    boolean bool;
    String str; // tipo por referencia

    public static void main(String[] args) {
        ValoresPorDefecto obj = new ValoresPorDefecto();

        System.out.println("byte: " + obj.b);
        System.out.println("short: " + obj.s);
        System.out.println("int: " + obj.i);
        System.out.println("long: " + obj.l);
        System.out.println("float: " + obj.f);
        System.out.println("double: " + obj.d);
        System.out.println("char: [" + obj.c + "]"); // se imprimirá vacío
        System.out.println("boolean: " + obj.bool);
        System.out.println("String: " + obj.str); // se imprimirá null
    }
}
