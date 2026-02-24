// Importing the FileWriter class  
import java.io.FileWriter;   
   
// Importing the IOException class for handling errors  
import java.io.IOException;   
   
class WriteToFile {  
    public static void main(String[] args) {  
      
    try {  
        FileWriter fwrite = new FileWriter("D:FileOperationExample.txt");  
        // writing the content into the FileOperationExample.txt file  
        fwrite.write("file read-write operation...");   
   
        // Closing the stream  
        fwrite.close();   
        System.out.println("file write  successfully...");  
    }
     catch (IOException e)
     {  
        System.out.println("error");  
        e.printStackTrace();  
        }  
    }  
}  