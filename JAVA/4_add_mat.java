class Matrix
{
            public static void main(String args[])
            {
               
                    int matrix1[][] = { { 1, 2, 3 }, { 4, 5, 6 }, { 7, 8, 9 } };
                    int matrix2[][] = { { 4, 6, 3 }, { 2, 5, 9 }, { 1, 0, 5 } };
                    int matrix3[][] = { { 1, 2, 0 }, { 4, 3, 6 }, { 7, 8, 8 } };
                    int matrix[][]=new int[3][3];
                    int i,j;
                    
                    System.out.println("first matrix:");
                    
                    for(i=0; i<matrix1.length; i++)
                    {
                      for(j=0; j<matrix1[i].length; j++)
                      {
                        System.out.println(matrix1[i][j]+" ");
                      }
                      System.out.println();
                    }

                    System.out.println("second matrix:");
                    for(i=0; i<matrix2.length; i++)
                    {
                      
                     for(j=0; j<matrix2[i].length; j++)
                        {
                            System.out.println(matrix2[i][j]+" ");
                        }
                        System.out.println();
                    }

                    System.out.println("third matrix:");

                    for(i=0; i<matrix3.length; i++)
                    {
                      
                        for(j=0; j<matrix3[i].length; j++)
                        {
                            System.out.println(matrix3[i][j]+" ");
                        }
                        System.out.println();
                    }

                        for(i=0;i<=2;i++)
                        {
                            for(j=0;j<=2;j++)
                            {
                                matrix[i][j]=matrix1[i][j]+matrix2[i][j]+matrix3[i][j];
                            }
                            
                        }
                   
                        
                        System.out.println("The Addition of 3 by 3 Matrix is: ");
                     
                        for(i=0;i<=2;i++)
                        {
                            System.out.println("\n");
                            for( j=0;j<=2;j++)
                            {
                                System.out.print("  "+matrix[i][j]);
                            }
                            
                        }
            }
}