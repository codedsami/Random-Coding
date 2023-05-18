package exam;

import practice.exam;
import java.io.*;
import java.util.Scanner;

public class main {
	public static void findFrequency(Scanner x, PrintWriter y, String a, String b, String c, String d) {
		int actr = 0;
		int bctr = 0; 
		int cctr = 0;
		int dctr = 0;
		x.useDelimiter("\\s+|,\\s*|\\.\\s*|:\\s*");
		
		while(x.hasNextLine()) {
			String s = x.next();
			
			if(s.equalsIgnoreCase(a)) actr++;
			if(s.equalsIgnoreCase(b)) bctr++;
			if(s.equalsIgnoreCase(c)) cctr++;
			if(s.equalsIgnoreCase(d)) dctr++;
			
		}
		y.printf("%-15s %d%n", a, actr);
		y.printf("%-15s %d%n", b, bctr);
		y.printf("%-15s %d%n", c, cctr);
		y.printf("%-15s %d%n", d, dctr);
		
	}

	public static void main(String[] args) {
 

		
		PrintWriter pw = null;
		Scanner sc = null;
		
		try {
			pw = new PrintWriter(new FileOutputStream("C:\\Users\\Mahmu\\OneDrive\\Desktop\\Notepad++\\Assignment1_SOEN287\\frequncy.text"));
			sc = new Scanner(new FileInputStream("C:\\Users\\Mahmu\\OneDrive\\Desktop\\Notepad++\\Assignment1_SOEN287\\Hearing.text"));
			
			
		}
		catch(FileNotFoundException e) {
			System.out.println("Error. will exit");
			System.exit(0);
		}
		catch(IOException e) {
			System.out.println("Error, will exit");
			System.exit(0);
		}
		
		finally{
			findFrequency(sc, pw, "plaintiff" , "hello" ,"judge" , "bat");

		   sc.close();
		   pw.close();
		}


		
		
		
		
		
		
	}

}
