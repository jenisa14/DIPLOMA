class Reversenum{
    public static void main(String [] args)
    {
        int num=439;
        int rev=0;
        int temp;
      System.out.println("before reverse:"+num);
        while(num!=0)
        {
          temp = num % 10;
          rev = rev * 10 + temp;
          num = num / 10;

        }
      System.out.println("after reverse:" +rev);
    }
}
