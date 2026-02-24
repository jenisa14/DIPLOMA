class Ractangle {

    int width,height;
  
    // constructor with  parameter
     Ractangle(int w,int h) {
      
      System.out.println("Constructor called......");
      width=w;
      height=h;
    }
  
    public static void main(String[] args) {
  
      
      Ractangle r1 = new Ractangle(4,12);
      System.out.println("width:"+r1.width +","+ "height:" +r1.height);
    }
  }