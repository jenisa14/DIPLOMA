class Simple {

    double p;
    double r;
    int n;
}
class Interest{

public static void main(String args[]){

    Simple s1=new Simple();
    s1.p=3000;
    s1.r=12;
    s1.n=2;

    double si=s1.p*s1.r*s1.n/100;
    System.out.println("simple intrest is:"+si);
}

}