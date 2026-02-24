
// Java Program to Illustrate add() Method
// of LinkedList class
// Where we are Adding at Last of List
  
// Importing required classes
import java.io.*;
import java.util.LinkedList;
  
// Main class
class Month{
  
    // Main driver method
    public static void main(String args[])
    {
  
        // Creating an empty LinkedList
        LinkedList list = new LinkedList();
  
        // Adding elements in the list
        // using add() method
        list.add("january");
        list.add("february");
        list.add("march");
        list.add("april");
        list.add("may");
        list.add("june");
        list.add("july");
        list.add("august");
        list.add("september");
        list.add("october");
        list.add("november");
        list.add("december");
  
        // Printing the elements of current LinkedList
        System.out.println("The list is:" + list);
  
        // Adding new elements to the end
        // Note: Default addition happens from last
       // list.add("Last");
        //list.add("Element");
  
        // Printing elements of updated LinkedList
        //System.out.println("The new List is:" + list);
    }
}