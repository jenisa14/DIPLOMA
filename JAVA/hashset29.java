import java.util.*;
import java.util.Iterator;
class M
{

  public static void main(String[] args) {
        
     HashSet<String> h_set = new HashSet<String>();
   
          h_set.add("Red");
          h_set.add("Green");
          h_set.add("Black");
          h_set.add("White");
          h_set.add("Pink");
          h_set.add("Yellow");

  
    Iterator<String> p = h_set.iterator();
  
  // while (p.hasNext()) 
   //{
     //   System.out.println(p.next());
   //}
   //}
//}


  
        for (String pl : h_set)
        {
  
            System.out.print(pl+"\n");
       }
}
}
