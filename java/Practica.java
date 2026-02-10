import java.util.Scanner;

public class Practica{

     

    public static Scanner sc = new Scanner(System.in);

    public static void main(String[] args){
        System.out.println("Hola como estas");
        int[] arreglo = {1,2,3,4,5,9,12,20,21,44,45,65,76,87};
        System.out.println(maxNumber(arreglo));
        System.out.println("Introduzca un numero para buscar en el arreglo:");
        int numero = sc.nextInt();
        System.out.println("location: " + searchLinear(numero, arreglo));

        //busqueda binaria
        System.out.println("Introduzca un numero para buscar en el arreglo:");
        int numero_2 = sc.nextInt();
        System.out.println("location: " + binarySearch(numero_2, arreglo));

        System.out.println("ordenar el arreglo: arreglo_2");
        int[] arreglo_2 = {76,2,45,9,12,87,20,4,21,5,44,65,1,54,11};
        bubbleSort(arreglo_2);
    }


    public static int maxNumber(int[] arreglo){
        int max = arreglo[0];
        for(int i=1; i < arreglo.length; i++){
            if(arreglo[i] > max){
                max = arreglo[i];
            }
        }
        return max;
    }

    //version con for
    public static int searchLinear(int x, int[] arreglo){
        for(int i=0; i < arreglo.length; i++){
            if(arreglo[i] == x){
                return i;
            }
        }
        return -1;
    }

    //version con while
  public static int searchLinear_2(int x, int[] arreglo) {
    int i = 0;

    while (i < arreglo.length && arreglo[i] != x) {
        i++;
    }

    if (i < arreglo.length) {
        return i;      // encontrado
    } else {
        return -1;     // no encontrado
    }
    }


    public static int binarySearch(int x, int[] arreglo) {
    int i = 0;
    int j = arreglo.length - 1;

    while (i <= j) {
        int m = (i + j) / 2;

        if (arreglo[m] == x) {
            return m;
        } else if (x > arreglo[m]) {
            i = m + 1;
        } else {
            j = m - 1;
        }
        }
    return -1; // no encontrado
    }


     // equivalente al 0 del libr
    public static int binarySearch_2(int x, int[] a) {
    int i = 0;
    int j = a.length - 1;

    while (i < j) {
        int m = (i + j) / 2;
        if (x > a[m]) {
            i = m + 1;
        } else {
            j = m;
        }
    }

    if (a[i] == x) {
        return i;
    } else {
        return -1; 
    }
    }



    public static void bubbleSort(int[] arreglo) {
    for (int i = 0; i < arreglo.length - 1; i++) {
        // El último elemento ya está en su posición correcta después de cada iteración
        for (int j = 0; j < arreglo.length - i - 1; j++) {
            // Comparar y hacer el intercambio si los elementos están fuera de orden
            if (arreglo[j] > arreglo[j + 1]) {
                // Intercambiar los elementos
                int temp = arreglo[j];
                arreglo[j] = arreglo[j + 1];
                arreglo[j + 1] = temp;
            }
        }
    }
    }


    public static void insertionSort(double[] a) {

    for (int j = 1; j < a.length; j++) {   // j := 2 to n
        int i = 0;                         // i := 1

        // buscar la posición correcta
        while (i < j && a[j] > a[i]) {
            i++;
        }

        double m = a[j];                   // m := aj

        // desplazar elementos a la derecha
        for (int k = j; k > i; k--) {
            a[k] = a[k - 1];
        }

        a[i] = m;                          // ai := m
    }
    }


}