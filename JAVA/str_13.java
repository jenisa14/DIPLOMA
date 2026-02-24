class One
{
    public static void main(String args[])
    {
      String text = "Java is  programming language";

      System.out.println("String: " + text);

    //lenght() method
      int length = text.length();
      System.out.println("Length: " + length);

    //charAt() method
    System.out.println(text.charAt(2));

      //format() method
      String s1=String.format("%s","java programing..");//string value
      String s2 =String.format("%f",11.101); // float value 
      String s3=String.format("%c",'j');//char values
      String s4=String.format("%x",101);//hexadecimal value

      System.out.println(s1); 
      System.out.println(s2);
      System.out.println(s3);
      System.out.println(s4);
       

      //contains() method
      System.out.println(text.contains("hello"));

    //split() method
    String[] result = text.split(" ");


    System.out.println("result = ");
    for (String str : result)
    {
      System.out.println(str + ", ");
 

   
    }
    
}}

