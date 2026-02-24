
// Java program to illustrate HashMap class of java.util
// package
  
// Importing HashMap class
import java.util.HashMap;
class S{

    public static void main(String[] args)
    {
        HashMap<String, Integer> map = new HashMap<>();
  
        map.put("palak",73);
        map.put("anisha", 74);
        map.put("drashti",78);
        map.put("yatri", 79);
        map.put("jenisa", 80);
  
        // Print size and content of the Map
        System.out.println("Size of map is:- "+ map.size());
        
        System.out.println(map);
        int a;
        if (map.containsKey("73"))
        {
  
            a = map.get("palak");
            System.out.println(a);
        }
        else if (map.containsKey("74"))
        {
  
            a = map.get("anisha");
            System.out.println(a);
        }
        else if (map.containsKey("78"))
        {
  
            a = map.get("drashti");
            System.out.println(a);
        }
        else if (map.containsKey("79"))
        {
  
            a = map.get("yatri");
            System.out.println(a);
        }
        else if (map.containsKey("80"))
        {
  
            a= map.get("jenisa");
            System.out.println(a);
        }
        else
        {
                System.out.println("error!!");
        }
    }
}